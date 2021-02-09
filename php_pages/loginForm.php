<!-- Login------------------------------------------------------------>
	<div type="text" id="log" style="border-style: solid;left: 10vw ;padding:1vw;background-color: #5cb85c">
		<div type="text" id="logform" st>
			<label for="username">نام کاربری</label>
			<input type="text" id="username" style="width: 20vw" />
			<br/>
			<label for="password">رمز عبور  </label>
			<input type="password" id="password" style="width: 20vw; margin-right: 0.2vw; margin-top: 1vw; margin-bottom: 1vw" />
			<br/>
			<input style="padding-right: 4vw; padding-left: 4vw" type="submit" id="submit"  value=" ورود " >
            <input type="submit" id="logout_submit" value="خروج" style="display:none">
            <input type="submit" id="registerButton"  style="padding-right: 4vw; padding-left: 4vw; margin-right: 2vw" value=" ثبت نام">
            <br/>
        </div>

		
		<div id="infoSQL" ></div>
	</div>
<!-- Form------------------------------------------------------------>	
<div type="text" id="form_container" method="post" style="display:none; border-style:solid ; left: 9vw; padding: 1vw; background-color: lightgreen; margin-top: 1vw">
	<div class="field" style="margin-bottom: 1vw; text-align: center">
		<label for="regusername ">نام کاربری را وارد کنید</label>
		<input type="text" name="regusername" id="regusername" value="">
	</div>
	<div class="field" style="text-align: center; margin-bottom: 1vw">
		<label for="regpassword">رمز عبور را وارد کنید</label>
		<input type="password" name="regpassword" id="regpassword">
	</div>
	<div class="field" style="text-align: center; margin-bottom: 1vw">
		<label for="regpassword_again">مجددا رمز عبور را وارد کنید</label>
		<input type="password" name="regpassword_again" id="regpassword_again">
	</div>

	<input style="text-align: center; margin-right: 11vw; padding-right: 1vw; padding-left: 1vw" type="submit" id="register_submit" value="ثبت نام">
</div>
<!-- Form------------------------------------------------------------>	