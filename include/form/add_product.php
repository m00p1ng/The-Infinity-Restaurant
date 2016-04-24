<div class="ui small modal" id="new-product-modal">
    <div class="header"><i class="plus icon"></i>Add new product</div>
    <div class="content">
        <div class="errorMsg"></div>
        <div class="ui form">
            <div class="nine wide field">
                <div class="field">
                    <label>Name</label>
                    <input type="text" id="add-prod-name">
                </div>
            </div>
            <div class="field">
                <label>Picture</label>
                <input type="text" id="add-prod-picture">
            </div>
            <div class="three wide field">
                <div class="field">
                    <label>Price</label>
                    <input type="text" id="add-prod-price" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <=57'>
                </div>
            </div>
            <div class="three wide field">
                <div class="field">
                    <label>Amount</label>
                    <input type="text" id="add-prod-amount" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <=57'>
                </div>
            </div>
            <div class="four wide field">
                <div class="field">
                    <label>Type</label>
                    <select class="ui fluid dropdown" name="add-prod-type" id="add-prod-type">
                        <option value="">Type</option>
                        <option value="Raw Material">Raw Material</option>
                        <option value="Vegetable">Vegetable</option>
                        <option value="Fruit">Fruit</option>
                        <option value="Drinking">Drinking</option>
                    </select>
                </div>
            </div>
            <div class="field">
                <label>Description</label>
                <textarea name="add-prod-desc" id="add-prod-desc" maxlength="500"></textarea>
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

<div class="ui small modal" id="new-product-complete">
    <div class="header"></div>
    <div class="content">
        <h1><i class="big green check circle outline icon"></i>&nbsp;&nbsp;Add new product complete!!</h1>
    </div>
</div>