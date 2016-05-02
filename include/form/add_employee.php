<div class="ui small modal" id="new-employee-modal">
    <div class="header"><i class='add user icon'></i>Add employee</div>
    <div class="content">
        <div id="errorMsg-emp"></div>
        <div class="ui form">
            <h4 class="ui dividing header">Account</h4>
            <div class="nine wide field">
                <div class="field">
                    <label>Username</label>
                    <input type="text" id="username">
                </div>
            </div>
            <div class="nine wide field">
                <div class="field">
                    <label>Password</label>
                    <input type="password" id="password">
                </div>
            </div>
            <div class="nine wide field">
                <div class="field">
                    <label>Confirm Password</label>
                    <input type="password" id="con_password">
                </div>
            </div>
            <h4 class="ui dividing header">Personal Information</h4>
            <div class="twelve wide field">
                <div class="two fields">
                    <div class="field">
                        <label>Firstname</label>
                        <input type="text" id="firstname">
                    </div>
                    <div class="field">
                        <label>Lastname</label>
                        <input type="text" id="lastname">
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Gender</label>
                <div class="two wide field">
                    <div class="ui selection dropdown">
                        <input type="hidden" name="gender" id="gender">
                        <div class="default text">Type</div>
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
                            <select class="ui fluid search dropdown" name="dob-day" id="dob-day">
                                <option value="">Day</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                    </div>
                    <div class="three wide field">
                        <div class="field">
                            <select class="ui fluid search dropdown" name="dob-month" id="dob-month">
                                <option value="">Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                    </div>
                    <div class="two wide field">
                        <div class="field">
                            <select class="ui fluid search dropdown" name="dob-year" id="dob-year">
                                <option value="">Year</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                            </select>
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
                        <input type="text" name="street" id="street" placeholder="Street" required>
                    </div>
                </div>
                <div class="four wide field">
                    <div class="field">
                        <input type="text" name="city" id="city" placeholder="City" required>
                    </div>
                </div>
                <div class="five wide field">
                    <div class="field">
                        <input type="text" name="state" id="state" placeholder="State" required>
                    </div>
                </div>
                <div class="three wide field">
                    <div class="field">
                        <input type="text" name="zip" id="zip" placeholder="Zip" required>
                    </div>
                </div>
            </div>
            <div class="nine wide field">
                <div class="field">
                    <label>Email</label>
                    <input type="text" id="email">
                </div>
            </div>
            <div class="six wide field">
                <div class="field">
                    <label>Phone</label>
                    <input type="text" id="phone">
                </div>
            </div>
            <h4 class="ui dividing header">Employee Description</h4>
            <div class="six wide field">
                <div class="field">
                    <label>Position</label>
                    <div class="two wide field">
                        <div class="ui selection dropdown">
                            <input type="hidden" name="position" id="position">
                            <div class="default text">Type</div>
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
                        <div class="ui selection dropdown">
                            <input type="hidden" name="status" id="status">
                            <div class="default text">Type</div>
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
                <textarea id="note"></textarea>
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

<div class="ui small modal" id="new-employee-complete">
    <div class="header"></div>
    <div class="content">
        <h1><i class="big green check circle outline icon"></i>&nbsp;&nbsp;Add new employee complete!!</h1>
    </div>
</div>