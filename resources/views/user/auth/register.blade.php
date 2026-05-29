<!-- Register Modal -->
<div id="register-modal" style="display:none; position:fixed; inset:0; z-index:100; align-items:center; justify-content:center;">
    <!-- Backdrop overlay -->
    <div style="position:absolute; inset:0; background:rgba(15,23,42,0.6); backdrop-filter:blur(4px);" id="register-modal-overlay"></div>

    <!-- Modal Card -->
    <div id="register-modal-content"
        style="background:#fff; border-radius:1.5rem; padding:2rem; max-width:28rem; width:100%; margin:0 1rem; box-shadow:0 25px 50px -12px rgba(0,0,0,0.25); position:relative; z-index:10; border:1px solid #f1f5f9; max-height:90vh; overflow-y:auto; transform:scale(0.95); transition:transform 0.3s ease;">

        <!-- Close Button -->
        <button type="button" id="close-register-btn"
            style="position:absolute; top:1rem; right:1rem; padding:0.375rem; border-radius:9999px; background:transparent; border:none; color:#94a3b8; cursor:pointer; z-index:10; transition:all 0.2s;"
            onmouseover="this.style.background='#f1f5f9'; this.style.color='#475569';"
            onmouseout="this.style.background='transparent'; this.style.color='#94a3b8';">
            <svg style="width:1.25rem; height:1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Logo & Title -->
        <div style="text-align:center; margin-bottom:1.75rem;">
            <span style="font-size:1.5rem; font-weight:900; color:#2563eb; letter-spacing:-0.025em; display:block;">Xe Ghép Pro</span>
            <p style="color:#94a3b8; font-size:0.75rem; font-weight:500; margin-top:0.375rem;">Đón trả tận nơi • Hành trình trọn vẹn</p>
        </div>

        <!-- Heading -->
        <h2 style="font-size:1.125rem; font-weight:800; color:#1e293b; margin-bottom:0.25rem;">Tạo tài khoản mới</h2>
        <p style="color:#94a3b8; font-size:0.75rem; font-weight:500; margin-bottom:1.5rem;">Đăng ký để trải nghiệm dịch vụ đặt xe tiện lợi nhất.</p>

        <!-- REGISTER FORM -->
        <form id="register-form" action="#" method="POST">
            @csrf
            <!-- Fullname -->
            <div style="margin-bottom:1rem;">
                <label style="display:block; font-size:10px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:0.375rem;">Họ và tên</label>
                <div style="position:relative;">
                    <span style="position:absolute; top:0; bottom:0; left:0; padding-left:0.875rem; display:flex; align-items:center; color:#94a3b8;">
                        <svg style="width:1rem; height:1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </span>
                    <input type="text" name="name" required placeholder="Nhập họ và tên..."
                        style="width:100%; padding:0.75rem 1rem 0.75rem 2.5rem; background:#f8fafc; border:1px solid #e2e8f0; border-radius:1rem; font-size:0.875rem; font-weight:600; color:#334155; outline:none; transition:all 0.2s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 0 0 3px rgba(59,130,246,0.1)';"
                        onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';">
                </div>
            </div>

            <!-- Email -->
            <div style="margin-bottom:1rem;">
                <label style="display:block; font-size:10px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:0.375rem;">Email</label>
                <div style="position:relative;">
                    <span style="position:absolute; top:0; bottom:0; left:0; padding-left:0.875rem; display:flex; align-items:center; color:#94a3b8;">
                        <svg style="width:1rem; height:1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </span>
                    <input type="email" name="email" required placeholder="Nhập địa chỉ email..."
                        style="width:100%; padding:0.75rem 1rem 0.75rem 2.5rem; background:#f8fafc; border:1px solid #e2e8f0; border-radius:1rem; font-size:0.875rem; font-weight:600; color:#334155; outline:none; transition:all 0.2s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 0 0 3px rgba(59,130,246,0.1)';"
                        onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';">
                </div>
            </div>

            <!-- Phone -->
            <div style="margin-bottom:1rem;">
                <label style="display:block; font-size:10px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:0.375rem;">Số điện thoại</label>
                <div style="position:relative;">
                    <span style="position:absolute; top:0; bottom:0; left:0; padding-left:0.875rem; display:flex; align-items:center; color:#94a3b8;">
                        <svg style="width:1rem; height:1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </span>
                    <input type="tel" name="phone" required placeholder="Nhập số điện thoại..."
                        style="width:100%; padding:0.75rem 1rem 0.75rem 2.5rem; background:#f8fafc; border:1px solid #e2e8f0; border-radius:1rem; font-size:0.875rem; font-weight:600; color:#334155; outline:none; transition:all 0.2s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 0 0 3px rgba(59,130,246,0.1)';"
                        onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';">
                </div>
            </div>

            <!-- Password -->
            <div style="margin-bottom:1rem;">
                <label style="display:block; font-size:10px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:0.375rem;">Mật khẩu</label>
                <div style="position:relative;">
                    <span style="position:absolute; top:0; bottom:0; left:0; padding-left:0.875rem; display:flex; align-items:center; color:#94a3b8;">
                        <svg style="width:1rem; height:1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </span>
                    <input type="password" name="password" required placeholder="Tối thiểu 8 ký tự..." id="register-password"
                        style="width:100%; padding:0.75rem 2.5rem 0.75rem 2.5rem; background:#f8fafc; border:1px solid #e2e8f0; border-radius:1rem; font-size:0.875rem; font-weight:600; color:#334155; outline:none; transition:all 0.2s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 0 0 3px rgba(59,130,246,0.1)';"
                        onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';">
                    <button type="button" class="toggle-password-reg" data-target="register-password"
                        style="position:absolute; top:0; bottom:0; right:0; padding-right:0.875rem; display:flex; align-items:center; color:#94a3b8; background:none; border:none; cursor:pointer; transition:color 0.2s;"
                        onmouseover="this.style.color='#475569';" onmouseout="this.style.color='#94a3b8';">
                        <svg class="eye-open" style="width:1rem; height:1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <svg class="eye-closed" style="width:1rem; height:1rem; display:none;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Confirm Password -->
            <div style="margin-bottom:1rem;">
                <label style="display:block; font-size:10px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:0.375rem;">Xác nhận mật khẩu</label>
                <div style="position:relative;">
                    <span style="position:absolute; top:0; bottom:0; left:0; padding-left:0.875rem; display:flex; align-items:center; color:#94a3b8;">
                        <svg style="width:1rem; height:1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </span>
                    <input type="password" name="password_confirmation" required placeholder="Nhập lại mật khẩu..." id="register-password-confirm"
                        style="width:100%; padding:0.75rem 2.5rem 0.75rem 2.5rem; background:#f8fafc; border:1px solid #e2e8f0; border-radius:1rem; font-size:0.875rem; font-weight:600; color:#334155; outline:none; transition:all 0.2s; box-sizing:border-box;"
                        onfocus="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 0 0 3px rgba(59,130,246,0.1)';"
                        onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';">
                    <button type="button" class="toggle-password-reg" data-target="register-password-confirm"
                        style="position:absolute; top:0; bottom:0; right:0; padding-right:0.875rem; display:flex; align-items:center; color:#94a3b8; background:none; border:none; cursor:pointer; transition:color 0.2s;"
                        onmouseover="this.style.color='#475569';" onmouseout="this.style.color='#94a3b8';">
                        <svg class="eye-open" style="width:1rem; height:1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <svg class="eye-closed" style="width:1rem; height:1rem; display:none;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Terms -->
            <div style="display:flex; align-items:flex-start; gap:0.5rem; margin-bottom:1rem;">
                <input type="checkbox" required name="terms"
                    style="width:1rem; height:1rem; border-radius:0.25rem; cursor:pointer; margin-top:0.125rem; accent-color:#2563eb;">
                <label style="font-size:0.75rem; color:#64748b; font-weight:500; line-height:1.6;">
                    Tôi đồng ý với
                    <a href="#" style="color:#2563eb; font-weight:700; text-decoration:none;" onmouseover="this.style.textDecoration='underline';" onmouseout="this.style.textDecoration='none';">Điều khoản dịch vụ</a>
                    và
                    <a href="#" style="color:#2563eb; font-weight:700; text-decoration:none;" onmouseover="this.style.textDecoration='underline';" onmouseout="this.style.textDecoration='none';">Chính sách bảo mật</a>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                style="width:100%; background:#2563eb; color:#fff; font-weight:700; padding:0.875rem; border-radius:1rem; border:none; box-shadow:0 4px 6px -1px rgba(37,99,235,0.2); cursor:pointer; font-size:0.875rem; display:flex; align-items:center; justify-content:center; gap:0.5rem; transition:all 0.2s;"
                onmouseover="this.style.background='#1d4ed8';" onmouseout="this.style.background='#2563eb';">
                <svg style="width:1rem; height:1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
                Đăng ký tài khoản
            </button>
        </form>

        <!-- Divider -->
        <div style="display:flex; align-items:center; padding:1.25rem 0;">
            <div style="flex-grow:1; border-top:1px solid #f1f5f9;"></div>
            <span style="flex-shrink:0; margin:0 1rem; font-size:10px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:0.1em;">Hoặc tiếp tục với</span>
            <div style="flex-grow:1; border-top:1px solid #f1f5f9;"></div>
        </div>

        <!-- Social Register -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.75rem;">
            <!-- Google -->
            <a href="#"
                style="display:flex; align-items:center; justify-content:center; gap:0.625rem; border:1px solid #e2e8f0; padding:0.75rem; border-radius:1rem; font-size:0.75rem; font-weight:700; color:#475569; text-decoration:none; transition:all 0.2s; cursor:pointer;"
                onmouseover="this.style.borderColor='#cbd5e1'; this.style.background='#f8fafc';" onmouseout="this.style.borderColor='#e2e8f0'; this.style.background='transparent';">
                <svg style="width:1rem; height:1rem;" viewBox="0 0 24 24">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4" />
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853" />
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05" />
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335" />
                </svg>
                Google
            </a>
            <!-- Facebook -->
            <a href="#"
                style="display:flex; align-items:center; justify-content:center; gap:0.625rem; border:1px solid #e2e8f0; padding:0.75rem; border-radius:1rem; font-size:0.75rem; font-weight:700; color:#475569; text-decoration:none; transition:all 0.2s; cursor:pointer;"
                onmouseover="this.style.borderColor='#cbd5e1'; this.style.background='#f8fafc';" onmouseout="this.style.borderColor='#e2e8f0'; this.style.background='transparent';">
                <svg style="width:1rem; height:1rem; color:#2563eb;" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.85z" />
                </svg>
                Facebook
            </a>
        </div>

        <!-- Footer Link -->
        <div style="text-align:center; margin-top:1.5rem; font-size:0.75rem; color:#64748b; font-weight:500;">
            <span>Đã có tài khoản?</span>
            <button type="button" id="switch-to-login"
                style="color:#2563eb; font-weight:700; background:none; border:none; cursor:pointer; margin-left:0.25rem; text-decoration:none; font-size:0.75rem;"
                onmouseover="this.style.textDecoration='underline';" onmouseout="this.style.textDecoration='none';">Đăng nhập ngay</button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const registerModal = document.getElementById('register-modal');
        const registerModalOverlay = document.getElementById('register-modal-overlay');
        const registerModalContent = document.getElementById('register-modal-content');
        const closeRegisterBtn = document.getElementById('close-register-btn');
        const switchToLogin = document.getElementById('switch-to-login');

        window.openRegisterModal = function () {
            if (!registerModal) return;
            registerModal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
            setTimeout(() => {
                registerModalContent.style.transform = 'scale(1)';
            }, 50);
        };

        window.closeRegisterModal = function () {
            if (!registerModal) return;
            registerModalContent.style.transform = 'scale(0.95)';
            setTimeout(() => {
                registerModal.style.display = 'none';
                document.body.style.overflow = '';
            }, 150);
        };

        if (closeRegisterBtn) closeRegisterBtn.addEventListener('click', window.closeRegisterModal);
        if (registerModalOverlay) registerModalOverlay.addEventListener('click', window.closeRegisterModal);

        if (switchToLogin) {
            switchToLogin.addEventListener('click', () => {
                window.closeRegisterModal();
                setTimeout(() => {
                    if (window.openLoginModal) window.openLoginModal();
                }, 200);
            });
        }

        // Toggle password visibility
        registerModal.querySelectorAll('.toggle-password-reg').forEach(btn => {
            btn.addEventListener('click', () => {
                const input = document.getElementById(btn.getAttribute('data-target'));
                if (!input) return;
                const eyeOpen = btn.querySelector('.eye-open');
                const eyeClosed = btn.querySelector('.eye-closed');
                if (input.type === 'password') {
                    input.type = 'text';
                    eyeOpen.style.display = 'none';
                    eyeClosed.style.display = 'block';
                } else {
                    input.type = 'password';
                    eyeOpen.style.display = 'block';
                    eyeClosed.style.display = 'none';
                }
            });
        });

        // Global trigger listener for data-auth-trigger="register"
        document.addEventListener('click', function (e) {
            const trigger = e.target.closest('[data-auth-trigger="register"]');
            if (trigger) {
                e.preventDefault();
                window.openRegisterModal();
            }
        });

        // Escape key to close
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && registerModal && registerModal.style.display !== 'none') {
                window.closeRegisterModal();
            }
        });
    });
</script>
