	  </div>

    </div>
    <div id="sidebar">
        <div id="header">
          <img src="<?php echo $this->assets->url("/transparent.png");?>"/>
        </div>
        <?php echo $this->assets->load("/pbe_crest.png","public",array("border"=>"0","class"=>"center"));?>
        <br />
<form class="form-1">
    <p class="field">
        <input type="text" name="login" placeholder="Username or email">
        <i class="icon-user icon-large"><img src="<?php echo $this->assets->url("/user.png");?>" valign="center"/></i>
    </p>
        <p class="field">
        <input type="password" name="password" placeholder="Password">
        <i class="icon-lock icon-large"><img src="<?php echo $this->assets->url("/password.png");?>" valign="center"/></i>
    </p>
    <p class="submit">
        <button type="submit"  name="submit">Login</button>
    </p>
</form>


  </div>
</body>
</html>

