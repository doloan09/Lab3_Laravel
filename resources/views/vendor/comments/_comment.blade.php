@inject('markdown', 'Parsedown')
@php
    // TODO: There should be a better place for this.
    $markdown->setSafeMode(true);
@endphp

<div id="comment-{{ $comment->getKey() }}">
    <div class="grid grid-cols-12">
        <img class="col-span-2 md:col-span-1 rounded-full text-center h-11 w-11 md:ml-6" src="https://thechatvietnam.com/storage/users/default.png" alt="{{ $comment->commenter->name ?? $comment->guest_name }} Avatar">
        <div class="media-body col-span-10 md:col-span-11">
            <div class="mb-2 bg-gray-100 p-4 rounded-2xl">
                <h5 class="mt-0 mb-1 font-bold">{{ $comment->commenter->name ?? $comment->guest_name }} <small class="text-muted font-medium">- {{ $comment->created_at->diffForHumans() }}</small></h5>
                <div style="white-space: pre-wrap;">{!! $markdown->line($comment->comment) !!}</div>
            </div>

            <div class="ml-4">
                @can('reply-to-comment', $comment)
                    <button data-toggle="modal" onclick="toggleModal('reply-modal-{{ $comment->getKey() }}')" data-target="#reply-modal-{{ $comment->getKey() }}" class="border-2 border-blue-500 py-1 px-3 rounded-3xl text-blue-600 mx-2  hover:text-white hover:bg-blue-600">@lang('comments::comments.reply')</button>
                @endcan
                @can('edit-comment', $comment)
                    <button data-toggle="modal" onclick="toggleModal('comment-modal-{{ $comment->getKey() }}')" data-target="#comment-modal-{{ $comment->getKey() }}" class="border-2 border-blue-500 py-1 px-4 rounded-3xl text-blue-600 mx-2 hover:text-white hover:bg-blue-600">@lang('comments::comments.edit')</button>
                @endcan
                @can('delete-comment', $comment)
                    <a href="{{ route('comments.destroy', $comment->getKey()) }}" onclick="event.preventDefault();document.getElementById('comment-delete-form-{{ $comment->getKey() }}').submit();" class="border-2 border-red-500 p-2 rounded-full text-red-600 hover:text-white hover:bg-red-600">@lang('comments::comments.delete')</a>
                    <form id="comment-delete-form-{{ $comment->getKey() }}" action="{{ route('comments.destroy', $comment->getKey()) }}" method="POST" style="display: none;">
                        @method('DELETE')
                        @csrf
                    </form>
                @endcan
            </div>

            @can('edit-comment', $comment)
                <div class="hidden mb-4" id="comment-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                    <form method="POST" action="{{ route('comments.update', $comment->getKey()) }}">
                        @method('PUT')
                        @csrf
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <textarea required class="border-2 w-full p-2 form-control" placeholder="Viết bình luận ...." name="message" rows="3">{{ $comment->comment }}</textarea>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="button" class="border-2 border-red-500 p-2 rounded-xl text-red-500 mx-4" onclick="toggleModal('comment-modal-{{ $comment->getKey() }}')">@lang('comments::comments.cancel')</button>
                            <button type="submit" class="border-2 border-blue-500 p-2 rounded-xl text-blue-500">@lang('comments::comments.update')</button>
                        </div>
                    </form>
                </div>
            @endcan

            @can('reply-to-comment', $comment)
                <div class="hidden" id="reply-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                    <form method="POST" action="{{ route('comments.reply', $comment->getKey()) }}">
                        @csrf
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <textarea required class="border-2 w-full form-control p-2" placeholder="Viết phản hồi ...." name="message" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="button" class="border-2 border-red-500 p-2 rounded-xl text-red-500 mx-4 hover:text-white hover:bg-red-600" onclick="toggleModal('reply-modal-{{ $comment->getKey() }}')" data-dismiss="modal">@lang('comments::comments.cancel')</button>
                            <button type="submit" class="border-2 border-blue-500 p-2 rounded-xl text-blue-500 hover:text-white hover:bg-blue-600">@lang('comments::comments.reply')</button>
                        </div>
                    </form>
                </div>
            @endcan

            <br />{{-- Margin bottom --}}

            <?php
                if (!isset($indentationLevel)) {
                    $indentationLevel = 1;
                } else {
                    $indentationLevel++;
                }
            ?>

            {{-- Recursion for children --}}
            @if($grouped_comments->has($comment->getKey()) && $indentationLevel <= $maxIndentationLevel)
                {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
                @foreach($grouped_comments[$comment->getKey()] as $child)
                    @include('comments::_comment', [
                        'comment' => $child,
                        'grouped_comments' => $grouped_comments
                    ])
                @endforeach
            @endif
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        function toggleModal(modalID){
            document.getElementById(modalID).classList.toggle("hidden");
        }
    </script>
@endpush
