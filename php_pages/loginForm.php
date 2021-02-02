<!-- Login------------------------------------------------------------>	
	<div type="text" id="log">
		<div type="text" id="logform" >
			<label for="username">نام کاربری </label>
			<input type="text" id="username" />
			<br/>
			<label for="password">رمز عبور</label>
			<input type="password" id="password" />
			<br/>
			<input type="submit" id="submit" value="                  ورود                  " >

            <br/>
                </div>	
		<input type="submit" id="logout_submit" value="خروج" style="display:none">
		<input type="submit" id="registerButton" value="                   ثبت نام                ">
		
		<div id="infoSQL" ></div>
	</div>
<!-- Form------------------------------------------------------------>	
<div type="text" id="form_container" method="post" style="display:none">
	<div class="field">
		<label for="regusername">نام کاربری را وارد کنید</label>
		<input type="text" name="regusername" id="regusername" value="">
	</div>
	<div class="field">
		<label for="regpassword">رمز عبور را وارد کنید</label>
		<input type="password" name="regpassword" id="regpassword">
	</div>
	<div class="field">
		<label for="regpassword_again">دوباره رمز عبور را وارد کنید</label>
		<input type="password" name="regpassword_again" id="regpassword_again">
	</div>
	
	<input type="submit" id="register_submit" value="ثبت نام">
</div>	
<!-- Form------------------------------------------------------------>	