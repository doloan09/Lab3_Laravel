<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->greeting('Xin chào ' . $notifiable->name . '!')
                ->subject('Verify Email Address')
                ->line('Vui lòng click vào nút bên dưới để xác thực email của bạn.')
                ->action('Xác nhân địa chỉ email', $url)
                ->line('Nếu bạn chưa tạo tài khoản, bạn không cần thực hiện thêm hành động nào.');
        });

        ResetPassword::toMailUsing(function ($notifiable, $token) {
            return (new MailMessage)
                ->greeting('Xin chào ' . $notifiable->name . '!')
                ->subject('Reset Password Notification')
                ->line('Bạn nhận được email này vì chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn.')
                ->action('Đặt lại mật khẩu', "http://lab3_laravel.test/reset-password/" . $token . "?email=" . $notifiable->email)
                ->line('Liên kết đặt lại mật khẩu này sẽ hết hạn sau 60 phút.')
                ->line('Nếu bạn không yêu cầu đặt lại mật khẩu, bạn không cần thực hiện thêm hành động nào.');
        });
    }
}
