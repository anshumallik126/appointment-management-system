<div class="modal fade" data-backdrop="static" id="forgot-password-modal" tabindex="-1"
    aria-labelledby="forgot-password-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-0">
            <div class="modal-header justify-content-start mb-4">
                <div class="text">
                    <p class="modal-title w-100 font-weight-bold text-primary">Forgot Password</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-0">
                <form class="ui form password-form" role="form" method="POST" action="#">
                    <div class="form-group clearfix field form-group required">
                        <p class="mb-2">We will send link to your email to set new password</p>
                        <label> Email Address </label>
                        <input type="email" placeholder="Your email address" class="form-control" id="forgot_email"
                            name="email" autofocus>
                    </div>
                    <div class="ui error message overflow-auto">
                    </div>
                    <div class="message-success"></div>
                    <div class="text-right">
                        <button type="submit" class="btn theme-btn my-3 text-white">
                            Send Email
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>