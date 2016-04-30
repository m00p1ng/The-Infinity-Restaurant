<div class="ui small modal" id="change-password-modal">
    <div class="header"><i class="privacy icon"></i>Change Password</div>
    <div class="content">
        <div id="errorPassword"></div>
        <div class="ui form" id="form-login">
            <div class="field">
                <label>Old Password</label>
                <div class="ui left icon input">
                    <i class="unlock alternate icon"></i>
                    <input type="text" name="old-password" id="old-password" required>
                </div>
            </div>
            <div class="field">
                <label>New Password</label>
                <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="new-password" id="new-password" required>
                </div>
            </div>
            <div class="field">
                <label>Confirm Password</label>
                <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="con-password" id="con-password" required>
                </div>
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="ui positive green button">
            Change Password
        </div>
    </div>
</div>