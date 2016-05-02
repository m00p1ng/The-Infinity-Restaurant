<div class="ui small modal" id="add-manu-modal">
    <div class="header">Add Manufacture</div>
    <div class="content">
        <div class="errorMsg"></div>
        <div class="ui form">
            <div class="nine wide field">
                <div class="field">
                    <label>Name</label>
                    <input type="text" id="manu-name">
                </div>
            </div>
            <div class="field">
                <label>Address</label>
            </div>
            <div class="fields">
                <div class="four wide field">
                    <div class="field">
                        <input type="text" name="manu-street" id="manu-street" placeholder="Street" required>
                    </div>
                </div>
                <div class="four wide field">
                    <div class="field">
                        <input type="text" name="manu-city" id="manu-city" placeholder="City" required>
                    </div>
                </div>
                <div class="five wide field">
                    <div class="field">
                        <input type="text" name="manu-state" id="manu-state" placeholder="State" required>
                    </div>
                </div>
                <div class="three wide field">
                    <div class="field">
                        <input type="text" name="manu-zip" id="manu-zip" placeholder="Zip" required>
                    </div>
                </div>
            </div>
            <div class="six wide field">
                <div class="field">
                    <label>Phone</label>
                    <input type="text" id="manu-phone">
                </div>
            </div>
            <div class="nine wide field">
                <div class="field">
                    <label>Email</label>
                    <input type="text" id="manu-email">
                </div>
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="ui deny button">
            Cancel
        </div>
        <div class="ui positive green button">
            Save
        </div>
    </div>
</div>

<div class="ui small modal" id="new-manu-complete">
    <div class="header"></div>
    <div class="content">
        <h1><i class="big green check circle outline icon"></i>&nbsp;&nbsp;Add new Manufacture complete!!</h1>
    </div>
</div>