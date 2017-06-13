<div class="layer"></div> <div class="modal fade modal-dialog_pop" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-popup">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <a href="#" class="close-link guri" data-dismiss="modal" aria-label="Close"><i class="icon_close_alt2"></i></a>
                 
                    <form action="<?php echo $this->webroot; ?>users/login" method="post"class="popup-form" id="myLogin">
                        <div class="login_icon"><i class="icon_lock_alt"></i></div>
                        <input type="email" name="data[User][username]" required title="Vennligst fyll ut dette feltet" class="form-control form-white" placeholder="Bruker-epost">
                        <input type="password" name="data[User][password]" required title="Vennligst fyll ut dette feltet" class="form-control form-white" placeholder="Passord">
                        <input type="hidden" name="data[User][server]" value="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                        <div class="text-left">
                            <a href="<?php echo $this->webroot; ?>users/forgetpwd">Glemt passord?</a>
                        </div>
                        <button  class="btnwale btn defult_btn btn-submit" type="submit">LOGG INN</button>
						<span class="acountSignup">Hvis du ikke har en konto kan du klikke her <a href="#register" data-toggle="modal" data-dismiss="modal">For å opprettekonto</a></span>
                    </form>
                </div>
            </div>

        </div>
 <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-popup">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <a href="#" class="close-link guri" data-dismiss="modal" aria-label="Close"><i class="icon_close_alt2"></i></a>
                    <form action="" accept-charset="ISO-8859-1" class="popup-form" method="post" id="myRegister">
                        <div class="login_icon"><i class="icon_lock_alt"></i></div>
                        <input type="text" required title="Vennligst fyll ut dette feltet" class="form-control form-white" name="data[User][name]" placeholder="Fullt navn" maxlength="50">
                        <input type="Email" id='email' required="required" title="Vennligst fyll ut dette feltet" class="form-control form-white" name="data[User][email]"  placeholder="E-post" maxlength="50">
                        <input type="password" required="required" title="Vennligst fyll ut dette feltet" class="form-control form-white" name="data[User][password]" placeholder="Passord"  id="password1" maxlength="50">
                        <input type="password" class="form-control form-white" title="Vennligst fyll ut dette feltet" placeholder="Bekreft passord"  id="password2" maxlength="50" required="required" name="data[User][cpassword]">
                        <input type="hidden" class="form-control form-white" name="data[User][role]" value="customer">
                        <input type="hidden" class="form-control form-white" name="data[User][active]" value="1">
                         <input type="hidden" name="data[User][server]" value="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                        <div id="pass-info" class="clearfix"></div>
                        <div class="checkbox-holder text-left">
                            <div class="checkbox checkbox1">
                                <input  type="checkbox" value="accept_2" title="Vennligst fyll ut dette feltet" id="check_2" name="check_2" required="required" />
                                <label class="checkwale" for="check_2"><span class="regit_agree">Jeg godtar <strong><a href="<?php echo $this->webroot; ?>pages/terms" target="_blank">vilkårene og betingelsene</a></strong></span></label>  
                            </div>
                        </div>
                        <button class="btnwale" type="submit" class="btn btn-submit">Registrere</button>
                    </form>
                </div>
            </div>
        </div>