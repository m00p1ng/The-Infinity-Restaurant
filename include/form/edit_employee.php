<div class="ui small modal edit-employee-modal">
    <div class="header"><i class='add user icon'></i>Edit employee</div>
    <div class="content">
        <div id="errorMsg-edit-emp"></div>
        <div class="ui form">
            <div class="nine wide field">
                <div class="field">
                    <label>Username</label>
                    <input type="text" id="edit-username" disabled>
                </div>
            </div>
            <h4 class="ui dividing header">Personal Information</h4>
            <div class="twelve wide field">
                <div class="two fields">
                    <div class="field">
                        <label>Firstname</label>
                        <input type="text" id="edit-firstname">
                    </div>
                    <div class="field">
                        <label>Lastname</label>
                        <input type="text" id="edit-lastname">
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Gender</label>
                <div class="two wide field">
                    <div class="ui selection disabled dropdown">
                        <input type="hidden" name="edit-gender" id="edit-gender">
                        <div class="default text" id="show-gender"></div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item" data-value="Male">
                                <i class="large male icon"></i> Male
                            </div>
                            <div class="item" data-value="Female">
                                <i class="large female icon"></i> Female
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Date of Birth</label>
                <div class="fields">
                    <div class="two wide field">
                        <div class="field">
                            <div class="ui fluid selection disabled dropdown">
                                <input type="hidden" name="edit-dob-day" id="edit-dob-day">
                                <div class="default text" id="show-dob-day">Day</div>
                                <i class="dropdown icon"></i>
                                <div class="menu">
                                    <div class="item" data-value="01">01</div>
                                    <div class="item" data-value="02">02</div>
                                    <div class="item" data-value="03">03</div>
                                    <div class="item" data-value="04">04</div>
                                    <div class="item" data-value="05">05</div>
                                    <div class="item" data-value="06">06</div>
                                    <div class="item" data-value="07">07</div>
                                    <div class="item" data-value="08">08</div>
                                    <div class="item" data-value="09">09</div>
                                    <div class="item" data-value="10">10</div>
                                    <div class="item" data-value="11">11</div>
                                    <div class="item" data-value="12">12</div>
                                    <div class="item" data-value="13">13</div>
                                    <div class="item" data-value="14">14</div>
                                    <div class="item" data-value="15">15</div>
                                    <div class="item" data-value="16">16</div>
                                    <div class="item" data-value="17">17</div>
                                    <div class="item" data-value="18">18</div>
                                    <div class="item" data-value="19">19</div>
                                    <div class="item" data-value="20">20</div>
                                    <div class="item" data-value="21">21</div>
                                    <div class="item" data-value="22">22</div>
                                    <div class="item" data-value="23">23</div>
                                    <div class="item" data-value="24">24</div>
                                    <div class="item" data-value="25">25</div>
                                    <div class="item" data-value="26">26</div>
                                    <div class="item" data-value="27">27</div>
                                    <div class="item" data-value="28">28</div>
                                    <div class="item" data-value="29">29</div>
                                    <div class="item" data-value="30">30</div>
                                    <div class="item" data-value="31">31</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="three wide field">
                        <div class="field">
                            <div class="ui fluid selection disabled dropdown">
                                <input type="hidden" name="edit-dob-month" id="edit-dob-month">
                                <div class="default text" id="show-dob-month">Month</div>
                                <i class="dropdown icon"></i>
                                <div class="menu">
                                    <div class="item" data-value="01">January</div>
                                    <div class="item" data-value="02">February</div>
                                    <div class="item" data-value="03">March</div>
                                    <div class="item" data-value="04">April</div>
                                    <div class="item" data-value="05">May</div>
                                    <div class="item" data-value="06">June</div>
                                    <div class="item" data-value="07">July</div>
                                    <div class="item" data-value="08">August</div>
                                    <div class="item" data-value="09">September</div>
                                    <div class="item" data-value="10">October</div>
                                    <div class="item" data-value="11">November</div>
                                    <div class="item" data-value="12">December</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="three wide field">
                        <div class="field">
                            <div class="ui fluid selection disabled dropdown">
                                <input type="hidden" name="edit-dob-year" id="edit-dob-year">
                                <div class="default text" id="show-dob-year">Year</div>
                                <i class="dropdown icon"></i>
                                <div class="menu">
                                    <div class="item" data-value="2016">2016</div>
                                    <div class="item" data-value="2015">2015</div>
                                    <div class="item" data-value="2014">2014</div>
                                    <div class="item" data-value="2013">2013</div>
                                    <div class="item" data-value="2012">2012</div>
                                    <div class="item" data-value="2011">2011</div>
                                    <div class="item" data-value="2010">2010</div>
                                    <div class="item" data-value="2009">2009</div>
                                    <div class="item" data-value="2008">2008</div>
                                    <div class="item" data-value="2007">2007</div>
                                    <div class="item" data-value="2006">2006</div>
                                    <div class="item" data-value="2005">2005</div>
                                    <div class="item" data-value="2004">2004</div>
                                    <div class="item" data-value="2003">2003</div>
                                    <div class="item" data-value="2002">2002</div>
                                    <div class="item" data-value="2001">2001</div>
                                    <div class="item" data-value="2000">2000</div>
                                    <div class="item" data-value="1999">1999</div>
                                    <div class="item" data-value="1998">1998</div>
                                    <div class="item" data-value="1997">1997</div>
                                    <div class="item" data-value="1996">1996</div>
                                    <div class="item" data-value="1995">1995</div>
                                    <div class="item" data-value="1994">1994</div>
                                    <div class="item" data-value="1993">1993</div>
                                    <div class="item" data-value="1992">1992</div>
                                    <div class="item" data-value="1991">1991</div>
                                    <div class="item" data-value="1990">1990</div>
                                    <div class="item" data-value="1989">1989</div>
                                    <div class="item" data-value="1988">1988</div>
                                    <div class="item" data-value="1987">1987</div>
                                    <div class="item" data-value="1986">1986</div>
                                    <div class="item" data-value="1985">1985</div>
                                    <div class="item" data-value="1984">1984</div>
                                    <div class="item" data-value="1983">1983</div>
                                    <div class="item" data-value="1982">1982</div>
                                    <div class="item" data-value="1981">1981</div>
                                    <div class="item" data-value="1980">1980</div>
                                    <div class="item" data-value="1979">1979</div>
                                    <div class="item" data-value="1978">1978</div>
                                    <div class="item" data-value="1977">1977</div>
                                    <div class="item" data-value="1976">1976</div>
                                    <div class="item" data-value="1975">1975</div>
                                    <div class="item" data-value="1974">1974</div>
                                    <div class="item" data-value="1973">1973</div>
                                    <div class="item" data-value="1972">1972</div>
                                    <div class="item" data-value="1971">1971</div>
                                    <div class="item" data-value="1970">1970</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Address</label>
            </div>
            <div class="fields">
                <div class="four wide field">
                    <div class="field">
                        <input type="text" name="edit-street" id="edit-street" placeholder="Street" required>
                    </div>
                </div>
                <div class="four wide field">
                    <div class="field">
                        <input type="text" name="edit-city" id="edit-city" placeholder="City" required>
                    </div>
                </div>
                <div class="five wide field">
                    <div class="field">
                        <input type="text" name="edit-state" id="edit-state" placeholder="State" required>
                    </div>
                </div>
                <div class="three wide field">
                    <div class="field">
                        <input type="text" name="edit-zip" id="edit-zip" placeholder="Zip" required>
                    </div>
                </div>
            </div>
            <div class="nine wide field">
                <div class="field">
                    <label>Email</label>
                    <input type="text" id="edit-email">
                </div>
            </div>
            <div class="six wide field">
                <div class="field">
                    <label>Phone</label>
                    <input type="text" id="edit-phone" maxlength="12">
                </div>
            </div>
            <h4 class="ui dividing header">Employee Description</h4>
            <div class="six wide field">
                <div class="field">
                    <label>Position</label>
                    <div class="two wide field">
                        <div class="ui selection disabled dropdown">
                            <input type="hidden" name="edit-position" id="edit-position">
                            <div class="default text" id="show-position">Type</div>
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <div class="item" data-value="Manager">Manager</div>
                                <div class="item" data-value="Cashier">Cashier</div>
                                <div class="item" data-value="Waiter">Waiter</div>
                                <div class="item" data-value="Chef">Chef</div>
                                <div class="item" data-value="Import Staff">Import Staff</div>
                                <div class="item" data-value="Stock Manager">Stock Manager</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="six wide field">
                <div class="field">
                    <label>Status</label>
                    <div class="two wide field">
                        <div class="ui selection disabled dropdown">
                            <input type="hidden" name="edit-status" id="edit-status">
                            <div class="default text" id="show-status">Type</div>
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <div class="item" data-value="Employed">Employed</div>
                                <div class="item" data-value="Resigned">Resigned</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Note</label>
                <textarea id="edit-note"></textarea>
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

<div class="ui small modal" id="edit-employee-complete">
    <div class="header"></div>
    <div class="content">
        <h1><i class="big green check circle outline icon"></i>&nbsp;&nbsp;Update employee complete!!</h1>
    </div>
</div>