<div class="ui small modal item-buy-modal">
    <div class="header" id="BuyName"></div>
    <div class="content">
        <div class="ui grid">
            <div class="eight wide column">
                <img class="ui large rounded image" id="BuyPic">
            </div>
            <div class="eight wide column">
                <h2>How many do you need?</h2>
                <div class="ui form">
                    <div class="inline fields">
                        <label>Amount :</label>
                        <div class="four wide field">
                            <input type="text" maxlength="3" value="1" id="BuyTotal" onkeypress='return event.charCode >= 48 && event.charCode <=57'>
                        </div>
                        <input type="hidden" id="Instock">
                        <button class="ui compact icon button" id="minus-value">
                            <i class="minus icon"></i>
                        </button>
                        <button class="ui compact icon button" id="add-value">
                            <i class="plus icon"></i>
                        </button>
                    </div>
                </div>
                <h3 class="ui red header">In stock: <span id="BuyAmount"></span></h3>
                <h2>Total: $20</h2>
                <button class="ui right floated blue button"><i class="add to cart icon"></i>Add to Cart</button>
            </div>
        </div>
    </div>
</div>