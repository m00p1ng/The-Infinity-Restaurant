<style>
    .check_grey {
        color: darkgray;
    }
</style>

<div class="ui small modal edit-modal">
    <div class="header">Edit Product</div>
    <div class="content">
        <div class="ui form">
            <div class="nine wide field">
                <div class="field">
                    <label>Name</label>
                    <input type="text" id="edit-prod-name">
                </div>
            </div>
            <div class="field">
                <label>Picture</label>
                <input type="text" id="edit-prod-picture">
            </div>
            <div class="three wide field">
                <div class="field">
                    <label>Price</label>
                    <input type="text" id="edit-prod-price" onkeypress='return event.charCode >= 48 && event.charCode <=57'>
                </div>
            </div>
            <div class="three wide field">
                <div class="field">
                    <label>Amount</label>
                    <input type="text" id="edit-prod-amount" onkeypress='return event.charCode >= 48 && event.charCode <=57'>
                </div>
            </div>
            <div class="four wide field">
                <div class="field">
                    <label>Type</label>
                    <div class="ui selection dropdown">
                        <input type="hidden" name="edit-prod-type" id="edit-prod-type">
                        <i class="dropdown icon"></i>
                        <div class="default text" id="show-type"></div>
                        <div class="menu">
                            <div class="item" data-value="Raw Material">Raw Material</div>
                            <div class="item" data-value="Vegetable">Vegetable</div>
                            <div class="item" data-value="Fruit">Fruit</div>
                            <div class="item" data-value="Drinking">Drinking</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Description</label>
                <textarea name="edit-prod-desc" id="edit-prod-desc" maxlength="500"></textarea>
            </div>
            <span class="check_grey chk_length"></span>
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

<div class="ui small modal edit-complete">
    <div class="header"></div>
    <div class="content">
        <h1><i class="big green check circle outline icon"></i>&nbsp;&nbsp;Update complete!!</h1>
    </div>
</div>