</head>
<body class="internalDockShop_special" onLoad="" >
<!-- affiliateStartTag -->



<!.. user context info layer -->
<div id="userInfoLayer" style="display:none;position:absolute;z-index:100;"></div>
<!-- hangar context info layer -->
<div id="hangarInfoLayer" style="display:none;position:absolute;z-index:100;"></div>
<!-- clan info layer -->
<div id="clanInfoLayer" style="display:none;position:absolute;z-index:100;"></div>
<!-- seitenabdecker -->



<div id="generalInfoPopup" class="fliess13px-grey">
    <div class="popup_headcontainer">
        <a id="general_popup_close" class="popup_close" href="#" ></a>
    </div>
    <div id="general_popup_question" class="question">
        <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/general/success_icon.png?__cv=7ea7548d2cb4149555faab27c783e500" id="general_popup_success" class="success" />
        <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/general/error_icon.png?__cv=abbabc79fb0ffe608c13a681aa9db900" id="general_popup_error" class="error" />
        <p id="general_popup_question_text">this text will be replace on xajax call</p>
    </div>
    <div class="popup_contentcontainer">
        <div class="popup_footcontainer">
            <div id="general_popup_close_button" class="popup_close_button">
                    <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=en&s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey" />
            </div>
        </div>
    </div>
</div>


<div id="busy_layer"></div>


<!-- seitenabdecker -->

<style type="text/css" media="screen">    @import "http://darkorbit-22.ah.bpcdn.net/css/cdn/includeInfoLayer.css?__cv=6f32d2604f47c348e721414f1418ee00";</style>
<script type="text/javascript">
infoText = '';
icon = '';
</script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/js/infoLayer.js?__cv=f873586616939bcb06c5d95a7ef73200"></script>

<div id="infoLayer" class="confirmInfoLayer fliess13px-grey">
    <div class="popup_shop_headcontainer">
        <a class="popup_shop_close" href="javascript: void(0);" onclick="closeInfoLayer()"></a>
    </div>
    <div class="popup_shop_contentcontainer">
        <br>
        <div class="question"></div>
        <div class="popup_shop_footcontainer">
            <div id="infoLayerConfirm">
                <div class="popup_shop_confirm_button">
                    <div id="infoLayer_link_confirm"
                         class="popup_shop_confirm_text"
                         style="background-image: url(
                            'http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey'
                         );">
                    </div>
                </div>
                <div class="popup_shop_abort_button">
                    <div class="popup_shop_abort_text"
                         style="background-image: url(
                            'http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=12&t=confirmBox_cancel&f=eurostyle_thea&color=white&bgcolor=grey'
                         );"
                         onclick="closeInfoLayer();">
                    </div>
                </div>
            </div>

            <div id="infoLayerInfo">
                <div class="popup_shop_close_button">
                    <div class="popup_shop_close_text"
                         style='background-image: url("http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey");'
                         onclick="closeInfoLayer();"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
</script>



<script type="text/javascript">

function showHelp() {
    showBusyLayer();
    width_x = document.body.offsetWidth;
    container_x = jQuery("#helpLayer").width();
    jQuery("#helpLayer").css('left', ((width_x/2) - (container_x/2)) + 'px');
    jQuery("#helpLayer").css('top', '150px');
    jQuery("#helpLayer").css('display', 'block');
}

</script>

<div id="helpLayer" style="position:absolute;width:480px;display:none;z-index:10;" class="fliess11px-grey">
    <div id="popup_standard_headcontainer">
        <div id="popup_standard_headline"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=Help&f=eurostyle_clan"></div>
        <div id="popup_standard_close"><a href="javascript:void(0);" onclick="closeLayer('helpLayer');" onfocus="this.blur();"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup_middle_close.jpg?__cv=450b0ca7303746b8cfcba9bef857e600"></a></div>
    </div>
    <div id="popup_standard_content">
        <div id="popup_info_sign_bg" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/infopopup_bg_help.png?__cv=eeb69ad925a2326a7c399261bf1e6d00);">
            <p>
                <strong>Greetings Space Pilot,</strong><br />
                <br />
                Your DarkOrbit journey will lead you to far-off galaxies fraught with danger and mystery. Your first rule of thumb is not to panic!<br />
                <br />
                You can always get help here:
                <ul style="margin:20px 0px;">
                    <li style="margin-left:20px;list-style-type:disc;">Visit our <a href="/GameAPI.php?action=portal.redirectToBoard" target="_blank" onfocus="this.blur()" style="text-decoration:underline">Forum</a>.</li>
                    <li style="margin-left:20px;list-style-type:disc;">Read the <a href=" http://help.bigpoint.com/?project=darkorbit&lang=us_IT&aid=332&aip= " target="_blank" onfocus="this.blur()" style="text-decoration:underline">Help</a>.</li>
                    <li style="margin-left:20px;list-style-type:disc;">Get tips for the new client in the <a href="http://help.bigpoint.com/?project=darkorbit&site=space_map_new&lang=us" target="_blank" style="text-decoration:underline">Guide to the New Client</a>.</li>
                </ul>
                If you can't find any answers to your questions contact <a href="indexInternal.es?action=support&back=internalStart" target="_blank" onfocus="this.blur()" style="text-decoration:underline">Support</a>.<br />
                <br />
                Godspeed, captain!
                <br style="margin-bottom: 30px;" />
                
            </p>
        </div>
    </div>
    <div id="popup_standard_content_additionalInfo">

    </div>
    <div id="popup_standard_footercontainer">
        <div id="popup_standard_singleButton">
            <table border="0" cellpadding="0" cellspacing="0" align="center" onclick="closeLayer('helpLayer');">
            <tr>
                <td class="button_resizable_1"></td>
                <td class="button_resizable_2"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text.esg?l=us&s=9&t=ok&f=eurostyle_clan"></td>
                <td class="button_resizable_3"></td>
            </tr>
            </table>
        </div>
    </div>
    <br class="clearMe" />
</div>
    <style>

#news {
    position:absolute;
    left:50%;
    top:85px;
	margin-left:-400px;
    background-position:0 0px;
    text-align:left;
    z-index:10000;
    border:2px solid white;}
#news_head {
    width:680px;height:40px;
    background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_top_bg.jpg?__cv=5bf95d660dae98dbb4f07d401eac4700);
    text-align:right;
}
#news_head_date {
    float: left;
    margin: 6px 0 0 10px;
}
#news_content {
    background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_mid_bg.jpg?__cv=cd2b78a4e250a83db34571d91f9db000);
    padding: 20px 35px;
    width: 610px;
    background-repeat: repeat-y;
    height:460px;
    overflow: auto;
}
#news_content li {
    list-style-type: disc;
    margin-left: 15px;
}
* html #news_content {
    width:610px;
}
#news_bottom {
    width:680px;height:49px;
    background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_bottom_bg.jpg?__cv=05ef0c3a74c444e24045d5d1c67a0d00);
    padding-top:15px;
    vertical-align:top;
}
#news_but_close {
    width:160px;height:19px;
    margin:auto;
    text-align:center;
    line-height:19px;
    background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_button_bg.png?__cv=9b58cb835063817adb8d35c164505800);
}


</style>

<div id="news" style="width:680px;display:none;">

    <div id="news_benefitPremium" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 15.04.2011</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('benefitPremium');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3>Premium fun with Premium advantages</h3>
            <br />
            <p>Are you a Premium player already? If not, consider it your ace up your sleeve: The Premium Pack puts you one step ahead of your adversaries.
<br><br>
Put all the <span class="breakingNewsHighlightBlue"><b>Premium advantages</b></span> to use:
<br><br>
<p></p><ul>
<li><span class="breakingNewsHighlightBlue"><b>Log out from the star chart in just five seconds</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Enjoy more cargo room with 500 extra units of space</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Get 5% off all Uridium items</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Have your spaceship repaired for free</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Save 50% on drone repairs</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Have your resources automatically refined</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Make your repair bots twice as effective</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Unlock all Radar CPU advantages</b></span></li>
<li><span class="breakingNewsHighlightBlue"><b>Cut the time it takes to load rockets in half</b></span></li>
</ul>
<br>
Become a Premium player now: With the <span class="breakingNewsHighlightBlue"><b>Six-Month Silver Pack</b></span> or the <span class="breakingNewsHighlightBlue"><b>One-Year Gold Pack</b></span>!
<br><br>
Click on "Uridium" in the menu and then on "Banking" to get your pack today!
<br><br></p>
            <br />
            <b><a href="indexInternal.es?action=internalPayment">>> Continue</a></b>        </div>
        
        <div id="news_bottom" class="fliess11px">

            <div style="float:left;margin-left:16px;"><a href="javascript: showNews('messageSystemLaunch');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_backward.jpg?__cv=4e570fcf2d01a16b811dc34c0cb31600" width="42" height="20"></a></div>                        <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('benefitPremium');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>
    <div id="news_messageSystemLaunch" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 13.01.2012</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('messageSystemLaunch');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3><span class="bn_headline">New messaging system!</span></h3>
            <br />
            <p><div class="bn_teaser"><b>The brand new messaging system is now available for all pilots and includes new features and a new design.</b></div><br />
        <div class="bn_content">Hello Space Pilot,<br /><br />In the past only clan members had access to a internal clan messaging system, while all the other space pilots had to resort to external measures or go without chatting altogether. 
 Well, all those headaches are a thing of the past. Our technicians have completely revamped the messaging system and made it accessible for all pilots!  Introducing <br /><br />
            <span class="bn_highlight"><b>the brand new messaging system I.N.E.S. - Interstellar
            Networking E-Mail-System!</b></span><br /><br />
            In the navigation above, you will see the Mail menu item and a display for new messages.<br /><br />Even if you do not belong to a clan, you can write other pilots, manage a personal contact list and save important messages.  Clan members may also send messages to clan members individually or as a group.  You may save up to 10 messages. Premium users may save up to 50.
            <br /><br />
            <span class="bn_highlight"><b>The new pilot menu is also a hit!</b></span>
            <br /><br />
            A window opens by clicking the nickname of another player. You can use this window to send friend requests or messages.  You may also see a pilot's profile simply by clicking.  Easy, right?
            <br /><br />
        </div>
        <div class="bn_footer">We hope you enjoy the new messaging system <br />
        Your DarkOrbit Team</div></p>
            <br />
                    </div>
        
        <div id="news_bottom" class="fliess11px">

            <div style="float:left;margin-left:16px;"><a href="javascript: showNews('achievementSystemMS2');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_backward.jpg?__cv=4e570fcf2d01a16b811dc34c0cb31600" width="42" height="20"></a></div>            <div style="float:right;margin-right:16px;"><a href="javascript: showNews('benefitPremium');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_forward.jpg?__cv=1afb0252fc4710f06e721eaee46b5e00" width="42" height="20"></a></div>            <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('messageSystemLaunch');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>
    <div id="news_achievementSystemMS2" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 23.02.2012</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('achievementSystemMS2');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3 class="bn_headline">New title system - many new achievements</h3>
            <br />
            	<div class="bn_teaser"><b>Show off your title ... with the new title system!</b></div>
            	<br/>
            	<div class="bn_content">What would a pilot be without awards and titles? From this point on, you can show other space pilots what you've got - all thanks to our <span class="bn_highlight"><b>new title system!</b></span> Are you especially good at killing aliens? Let it be known with the new title system. You don't have to be humble about your capabilites any more - now you have a cool, new title to show everyone just how talented you are! 
<br /><br />
Our achievements have also been revamped and improved so that you have more to choose from. There are a total of <span class="bn_highlight"><b>over 20 new achievements</b></span> waiting to be unlocked.  So jump in the cockpit, Space Pilot. Fame and glory await!
 <br /><br />
Here's to successful missions!</div>
            	<br/>
            	<br/>
            	<div class="bn_footer">Your DarkOrbit Team</div>
            <br />
                    </div>
        
        <div id="news_bottom" class="fliess11px">

            <div style="float:left;margin-left:16px;"><a href="javascript: showNews('killscreen2');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_backward.jpg?__cv=4e570fcf2d01a16b811dc34c0cb31600" width="42" height="20"></a></div>            <div style="float:right;margin-right:16px;"><a href="javascript: showNews('messageSystemLaunch');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_forward.jpg?__cv=1afb0252fc4710f06e721eaee46b5e00" width="42" height="20"></a></div>            <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('achievementSystemMS2');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>
    <div id="news_killscreen2" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 01.03.2012</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('killscreen2');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3 class="bn_headline">Repair your ship on the spot right now.</h3>
            <br />
            	<div class="bn_teaser"><b>New options for repairing ships</b></div>
            	<br/>
            	<div class="bn_content">Shot down and ticked off that you can't make your enemies pay immediately? Ha! Have we got some good news for you - great advancements have been made in ship repair technology! Now when you are shot down, you can repair your ship immediately without having to leave the space map.
    <br /><br />
    Our engineers have developed <span class="breakingNewsHighlightBlue"><b>2 new repair options</b></span> for repair after being shot down. They have also improved the new repair processes:<br /><br />
    1. Reappear in the game exactly where you were shot down.<br />
    2. Reappear at the next jumpgate on the map on which you were destroyed.
    <br /><br />
    Warning: If you choose one of these options, you will reappear with only <span class="breakingNewsHighlightBlue"><b>10% of your hitpoints</b></span>. However, you will receive <span class="breakingNewsHighlightBlue"><b>10 seconds of attack protection</b></span>, which expires once you begin attacking opponents.<br /><br />
    Use these cushy repair methods strategically so that you can exact your sweet revenge!</div>
            	<br/>
            	<br/>
            	<div class="bn_footer">Your DarkOrbit Team</div>
            <br />
                    </div>
        
        <div id="news_bottom" class="fliess11px">

            <div style="float:left;margin-left:16px;"><a href="javascript: showNews('hangarRenamingPremium');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_backward.jpg?__cv=4e570fcf2d01a16b811dc34c0cb31600" width="42" height="20"></a></div>            <div style="float:right;margin-right:16px;"><a href="javascript: showNews('achievementSystemMS2');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_forward.jpg?__cv=1afb0252fc4710f06e721eaee46b5e00" width="42" height="20"></a></div>            <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('killscreen2');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>
    <div id="news_hangarRenamingPremium" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 23.07.2012</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('hangarRenamingPremium');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3 class="bn_headline">New Premium Plus! Name Your Hangars</h3>
            <br />
            	<div class="bn_teaser"><b>Attention Premium Pilots! Keep your fleet in order for quick-strike mayhem with customized names for your hangars.</b></div>
            	<br/>
            	<div class="bn_content">Hello Space Pilots,
<br><br>
Are you having difficulties remembering which ship you put in which hangar?
<br><br>
There is an extra special bonus for premium pilots to help them keep a step ahead of the enemy in the heat of battle: <span class="breakingNewsHighlightBlue"><b>customized names for hangars.</b></span>
<br><br>
Use personalized hangar names to aid you in stressful situations. If one of your hangars contains a Goliath, then give it a similar sounding name! Make the hangar and ship names memorable for the intense heat of battle.
<br><br>
Your new names will appear on the space map in the tool section and you'll be able to quickly select the right battle cruiser for the right battle in the warp section.
<br><br>
<span class="breakingNewsHighlightBlue"><b>Just click the hangar name to the upper right of the hangar</b></span> and rename your hangars!
<br><br></div>
            	<br/>
            	<br/>
            	<div class="bn_footer">Your DarkOrbit Team</div>
            <br />
                    </div>
        
        <div id="news_bottom" class="fliess11px">

            <div style="float:left;margin-left:16px;"><a href="javascript: showNews('hadesGate');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_backward.jpg?__cv=4e570fcf2d01a16b811dc34c0cb31600" width="42" height="20"></a></div>            <div style="float:right;margin-right:16px;"><a href="javascript: showNews('killscreen2');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_forward.jpg?__cv=1afb0252fc4710f06e721eaee46b5e00" width="42" height="20"></a></div>            <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('hangarRenamingPremium');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>
    <div id="news_hadesGate" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 25.04.2013</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('hadesGate');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3 class="bn_headline">Hades Gate - a Galaxy Gate for groups!</h3>
            <br />
            	<div class="bn_teaser"><b>Aliens are plotting against humanity! Build the Hades Gate and jump with your buddies to disrupt their evil plans!</b></div>
            	<br/>
            	<div class="bn_content">Hello Space Pilots,
<br><br>
are you strong, brave, and decisive? Excellent!
<br><br>
We're in need of fighters of precisely your caliber to save us from the impending threat in the Hades Sector. We've received intel reports of three alien species amassing in the long-deserted seat of the Aloisi Empire. We must prevent them from destroying our civilization. They want to take our rights, rob us of our freedom, and destroy everything we've worked so hard to achieve.
<br><br>
Construct the new Hades Gate and organize a group of at least 4 of your most trusted pilots. Show these scum the meaning of power and integrity! Suit up and let's go!
<br><br>
One last thing. Company intel has picked up the jump signatures of three particularly powerful alien ships. Be careful out there and good luck!
<br><br></div>
            	<br/>
            	<br/>
            	<div class="bn_footer">Your DarkOrbit Team</div>
            <br />
                    </div>
        
        <div id="news_bottom" class="fliess11px">

            <div style="float:left;margin-left:16px;"><a href="javascript: showNews('eliteClassShipDesigns');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_backward.jpg?__cv=4e570fcf2d01a16b811dc34c0cb31600" width="42" height="20"></a></div>            <div style="float:right;margin-right:16px;"><a href="javascript: showNews('hangarRenamingPremium');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_forward.jpg?__cv=1afb0252fc4710f06e721eaee46b5e00" width="42" height="20"></a></div>            <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('hadesGate');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>
    <div id="news_eliteClassShipDesigns" class="news_container" style="display: none;">
        <div id="news_head">
            <div id="news_head_date" class="fliess11px-weiss">News from 22.05.2013</div>
            <a id="closeButton" href="javascript:void(0);" onclick="closeNews('eliteClassShipDesigns');" onfocus="this.blur()"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_closebutton.jpg?__cv=7c6085e184e0b36c706cce1d65e5bf00" width="30" height="29"></a>
        </div>

		        <div id="news_content" class="fliess11px-weiss">
            <h3 class="bn_headline">New ship designs for a safer universe!</h3>
            <br />
            	<div class="bn_teaser"><b>Cutting edge technology for the best pilots in deep space.</b></div>
            	<br/>
            	<div class="bn_content">Hello Space Pilots,
<br><br>
After years of research and development, our scientists are so close to completing the ultimate weapon of alien annihilation. In the meantime, they’re releasing new ship designs made of the same materials to make sure they’re up to snuff. We need the best and the brightest pilots to hop in the cockpit and give them a spin around Orbit! What do you say, pilot? You think you got the guts? If so, here are some of the new features you have to look forward to:
<br>
<ul style="line-height:180%">
<li>New Veteran Designs for the Aegis, Spearhead and Citadel: 5 % more EP, 5 % more Honor, additional storage space for ammo</li>
<li>A more powerful, much flashier Bigboy</li>
<li>A Piranha that's faster than ever before</li>
<li>It’s back and it’s mightier than ever – The Nostromo!</li>
<li>Not to mention an all new, exclusive Bigboy design!</li>
</ul>
<br><br>
Victory over the invading forces is so close we can taste it! Help us out and become a part of history!
<br><br></div>
            	<br/>
            	<br/>
            	<div class="bn_footer">Your DarkOrbit Team</div>
            <br />
                    </div>
        
        <div id="news_bottom" class="fliess11px">

                        <div style="float:right;margin-right:16px;"><a href="javascript: showNews('hadesGate');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/popups/popup2_but_forward.jpg?__cv=1afb0252fc4710f06e721eaee46b5e00" width="42" height="20"></a></div>            <div id="news_but_close"><a href="javascript:void(0);" onclick="closeNews('eliteClassShipDesigns');" style="display:block;" onfocus="this.blur();"><strong>Close</strong></a></div>


        </div>
    </div>

</div>

<script>
var SID='dosid=6424518366866928d7065edffd4e7b18';



//var win = window;
//width_x = win.innerWidth ? win.innerWidth : win.document.body.clientWidth;
//container_x = jQuery("#news").width();
//jQuery("#news").css('left', ((width_x/2) - (container_x/2)) - 100 +'px');
//jQuery("#news").css('top', '50px');

function showNews(newsID) {
    jQuery('.news_container').hide();
    jQuery('#news').show();
    jQuery("#news_" + newsID).show();
    showBusyLayer();
}
function closeNews(newsID) {
    jQuery("#news").hide();
    hideBusyLayer();
}


</script>
                  

<div class="backgroundImageContainer">
    <div class="overallContainer">
        <div class="rightBannerContainer">
                    <!-- notrans -->
            <div id="banner-right">
                                                    <!-- affiliateBanner: banner enabled --><script type="text/javascript" src="http://adin-www.bigpoint.net/adxx.php?pid=6&source=country%3DIT%26areaID%3Dinternal.trade%26aid%3D332%26acm%3D%26acr%3D579%26aip%3D%26gameID%3D579%26uid%3D98026209%26locale%3Dus&sign=VjGMHKBRLmXIK22vtF2zLl4d7UDWohpC4igWswyq"></script>
                                            </div>
            <!-- end notrans -->
                </div>
        <div class="outerContainer fliess11px-gelb">
            
                                    <div id="header_intern">
                
                <div id="header_branding">
                    <img id="PartnerCobrandLogo" src="http://pit-835.a.bpcdn.net/published/cobrands/0_22_3.png" />
                </div>

                                    <div id="header_ship" style="background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/header/ships/model<?php echo $Users->DataRow['shipId']; ?>.png)"></div>
                                                <a id="header_logo" href="/indexInternal.es?action=internalStart"></a>
                                <div id="header_top_bar">
                    <div id="header_top_id" class="header_top_item">
                        <div class="header_item_wrapper">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/header/buttons/icon_stats_ID.png?__cv=a4bc90727a951c42f0901a307858ca00" width="16" height="13" alt="" />
                            <span><?php echo $Users->DataRow['playerID']; ?></span>
                        </div>
                    </div>
                    <div id="header_top_level" class="header_top_item">
                        <div class="header_item_wrapper">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/header/buttons/icon_stats_lvl.png?__cv=b84d7d86e451fdfbaa2115080867b100" width="16" height="13" alt="" />
                            <?php echo $Users->DataRow['level'];  ?>
                        </div>
                    </div>
                    <div id="header_top_hnr" class="header_top_item">
                        <div class="header_item_wrapper">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/header/buttons/icon_stats_hon.png?__cv=7fdab834dd65f0860a51a616caa05800" width="16" height="13" alt="" />
                            <span><?php echo $Users->DataRow['honor']; ?></span>
                        </div>
                    </div>
                    <div id="header_top_exp" class="header_top_item">
                        <div class="header_item_wrapper">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/header/buttons/icon_stats_exp.png?__cv=e2d3b6193cbab9dd23d67638df826700" width="16" height="13" alt="" />
                            <span><?php echo $Users->DataRow['exp'];  ?></span>
                        </div>
                    </div>
                </div>
                <div id="header_second_bar">
                    <a class="header_btn_02" id="header_home_btn" href="/indexInternal.es?action=internalStart">
                        <div class="header_btn_02_left"></div>
                        <div class="header_btn_02_middle">
                            <img id="header_home_btn_std" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_home&f=eurostyle_tbla&color=lightBlue&bgcolor=black" />
                            <img id="header_home_btn_act" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_home&f=eurostyle_tbla&color=black&bgcolor=skyBlue" style="display: none;" />
                        </div>
                        <div class="header_btn_02_right"></div>
                    </a>
                    <a class="header_btn_01" id="header_logout_btn" href="/indexInternal.es?action=externalLogout">
                        <div class="header_btn_01_left"></div>
                        <div class="header_btn_01_middle">
                            <img id="header_logout_btn_std" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=7&t=header_logout&f=eurostyle_tbla&color=lightBlue&bgcolor=black" />
                            <img id="header_logout_btn_act" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=7&t=header_logout&f=eurostyle_tbla&color=black&bgcolor=skyBlue" style="display: none;" />
                        </div>
                        <div class="header_btn_01_right"></div>
                    </a>
                    <a class="header_btn_01" id="header_help_btn" href="#">
                        <div class="header_btn_01_left"></div>
                        <div class="header_btn_01_middle">
                            <img id="header_help_btn_std" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=7&t=header_help&f=eurostyle_tbla&color=lightBlue&bgcolor=black" />
                            <img id="header_help_btn_act" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=7&t=header_help&f=eurostyle_tbla&color=black&bgcolor=skyBlue" style="display: none;" />
                        </div>
                        <div class="header_btn_01_right"></div>
                    </a>
                    

                </div>

                                                                                                                                                                    
                <div id="header_main">
                                            <div id="header_hangar_slots">
                                                                                            <a showHangarInfo="zqG"
                                    class="header_hangar_slot
                                         current_slot"
                                                                            href="indexInternal.es?action=internalDock&tpl=internalDockEquipment"
                                    >
                                    1
                                </a>
                                                                                                                        <a class="header_hangar_slot_getNext"
                                    href="indexInternal.es?action=internalDock&tpl=internalDockShips&lootId=hangar_slot">+</a>
                                                        <div id="header_hangar_arrow"></div>
                        </div>

                        <div id="hangar_slot_current"></div>
                        <div id="hangar_slot_arrow"></div>
                    
                    <div id="header_main_left">
                        <a class="header_std_btn header_lft_std" id="hangar_btn" href="/indexInternal.es?action=internalDock">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_hangar&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" alt="" />
                        </a>

                        <a class="header_std_btn header_lft_std" id="clan_btn" href="/indexInternal.es?action=internalNewClan">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_clan&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" alt="" />
                        </a>
                        <a class="header_std_btn header_lft_std" id="upgrades_btn" href="/indexInternal.es?action=internalItemUpgradeSystem">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_upgrades&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" alt="" />
                        </a>

                        <a class="header_std_btn header_lft_email newEmail" id="mail_btn" href="/indexInternal.es?action=internalMessaging">
                            <div id="emailHighlight"></div>                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_mail&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" />
                        </a>

                        <a class="header_big_btn header_lft_big" id="profile_btn" href="/indexInternal.es?action=internalPilotSheet">
                            <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_pilotsheet&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue&h=21" />
                        </a>
                    </div>

                    <div id="header_main_middle">
                                                    <div id="ip_placeholder"></div>
                        
                            <div id="header_start_btn" >
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=16&t=header_start&f=eurostyle_tbla&color=white&bgcolor=green&h=18" />
                            </div>

                                                                                                                                                    <a class="header_event_wrapper" href="/indexInternal.es?action=internalPilotSheet&tpl=friends">
                                <img class="txt_img" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_invites_and_bonus&f=eurostyle_tmed&color=fullGrey&bgcolor=darkGrey" />
                            </a>
                                                                                                                                                </div>

                        <div id="header_main_right">
                            <a class="header_std_btn header_rgt_std header_current" id="shop_btn" href="/indexInternal.es?action=internalDock&tpl=internalDockShips" alt="">
                                                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_shop&f=eurostyle_tbla&color=black&bgcolor=skyBlue" alt="" />
                            </a>

                            <a class="header_std_btn header_rgt_std" id="trade_btn" href="/indexInternal.es?action=internalHandel">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_trade&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" />
                            </a>
                            <a class="header_std_btn header_rgt_std" id="uri_btn" href="/indexInternal.es?action=internalPayment">
                                                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_payment&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" />
                            </a>

                            <a class="header_std_btn header_rgt_std" id="lab_btn" href="/indexInternal.es?action=internalSkylab">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_skylab&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue" />
                            </a>
                            <a class="header_big_btn header_rgt_big" id="gg_btn" href="/indexInternal.es?action=internalGalaxyGates">
                                <img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=8&t=header_galaxygates&f=eurostyle_tbla&color=lightestBlue&bgcolor=blue&h=21" />
                            </a>

                                                    </div>

                                                                            <a id="header_new_mail" href="/indexInternal.es?action=internalMessaging">
                                (1)
                            </a>
                                                <div id="header_emailInvite" class="header_emailInvite header_emailInvite_normal"
                                                             onclick ="SLAYER.renderInviteDialog();">
                           <div id="header_emailInvite_glow"></div>
                        </div>

                    </div>
                    <div id="header_bottom">
                        <img id="news_overlay_left" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/header/buttons/newsticker_gradient_left.png?__cv=2e92a72877420f7082a6cca1bcead200" width="123" height="26" />
                        <img id="news_overlay_right" src="http://darkorbit-22.ah.bpcdn.net/do_img/global/header/buttons/newsticker_gradient_right.png?__cv=1bc4a19ec0a4037149d46c7dbf9af700" width="123" height="26" />
                        <div id="header_news_wrapper">
                            <ul id="header_news_ticker">
                                                                                            <li id="header_news_item_benefitPremium" onclick="HeaderFunc.showNews('benefitPremium')">
                                    Premium fun with Premium advantages
                                </li>
                                                                                                                            <li id="header_news_item_messageSystemLaunch" onclick="HeaderFunc.showNews('messageSystemLaunch')">
                                    <span class="bn_headline">New messaging system!</span>
                                </li>
                                                                                                                            <li id="header_news_item_achievementSystemMS2" onclick="HeaderFunc.showNews('achievementSystemMS2')">
                                    New title system - many new achievements
                                </li>
                                                                                                                            <li id="header_news_item_killscreen2" onclick="HeaderFunc.showNews('killscreen2')">
                                    Repair your ship on the spot right now.
                                </li>
                                                                                                                            <li id="header_news_item_hangarRenamingPremium" onclick="HeaderFunc.showNews('hangarRenamingPremium')">
                                    New Premium Plus! Name Your Hangars
                                </li>
                                                                                                                            <li id="header_news_item_hadesGate" onclick="HeaderFunc.showNews('hadesGate')">
                                    Hades Gate - a Galaxy Gate for groups!
                                </li>
                                                                                                                            <li id="header_news_item_eliteClassShipDesigns" onclick="HeaderFunc.showNews('eliteClassShipDesigns')">
                                    New ship designs for a safer universe!
                                </li>
                                                                                        </ul>
                        </div>
                        <div id="header_credits" class="header_money">
                            <?php echo $Users->DataRow['credits'];  ?>
                        </div>
                        <a id="header_uri" class="header_money"  href="/indexInternal.es?action=internalPayment"   onclick="openExternal('/?action=internalPaymentProxy&req=5bbf05abd9f5b3e6ef54e109cb090155e1456d0398f7aed0d59236a21530c8a64e23d6940045e01b34d288f29b51396b3d8ca06c811a1d8ec0cbfc61697b91e6&v=d2762f55653ce60d');" >
                            <?php echo $Users->DataRow['uri']; ?>
                        </a>
                    </div>
                </div>

            
    
    
    <script type='text/javascript'>
    function onFailFlashembed() {
        var inner_html = '<div class="flashFailHead">Get the Adobe Flash Player</div>\n\
        <div class="flashFailHeadText">In order to play DarkOrbit, you need the latest version of Flash Player. Just install it to start playing!\n\
        <div class="flashFailHeadLink" style="cursor: pointer">Download the Flash Player here for free: <a href=\"http://www.adobe.com/go/getflashplayer\" style=\"text-decoration: underline; color:#A0A0A0;\">Download Flash Player<\/a></div></div>';

        if(!document.getElementById('flashHeader')){
            document.getElementById('header_container').innerHTML = inner_html;
            document.getElementById('equipment_container').innerHTML = "";
            document.getElementById('materialiser').innerHTML = "";
        }

        if(document.getElementById('inventory')){
            document.getElementById('equipment_container').innerHTML = inner_html;
        }

        if(document.getElementById('flashGG')){
            document.getElementById('materialiser').innerHTML = inner_html;
            jQuery('#materialiser').css('margin-left', 110);
            jQuery('#materialiser').css('margin-top', 40);
        }
    }

    function expressInstallCallback(info) {
            // possible values for info: loadTimeOut|Cancelled|Failed
            onFailFlashembed();
    }

    /* this is a hack because the this.hideEmailInviteDialog which is defined as the callback function in the social plugin does not work. So i need this hack for now */
    function hackEmailInviteDialog() {
        var invite_bg = jQuery('#social-invite-container #invite-dialog #invite-bg .invite-dialog-header');
        /*var invite_bg = jQuery('#social-invite-container #invite-dialog #invite-bg');*/
        var closeButton = jQuery('.close');
        closeButton.remove();
        var closeDiv = jQuery(document.createElement('div'))
                .attr('id', 'emailInviteCloseButton')
                .appendTo(invite_bg);
    }

    jQuery(document).ready(function() {
        hackEmailInviteDialog();
        jQuery('#emailInviteCloseButton').click(function() {
            var inviteDialog = jQuery('#invite-dialog');
            var inviteResult = jQuery('.invite-result');
            inviteDialog.css('display', 'none');
            inviteResult.css('display', 'none');
            hideBusyLayer();
            inviteIncentives.mailInviteCallback();
        });

        jQuery(".header_hangar_slot").mouseover(function(){
            jQuery("#hangarInfoLayer").show();

        });

        jQuery(".header_hangar_slot").mouseout(function(){
            jQuery("#hangarInfoLayer").hide();
        });

        /**
         * Apply jScrollpane to history log table
         * if the element is available.
         */
        var tableHistory            = jQuery('#table_history'),
            isTableHistoryPresent   = 0 < tableHistory.length,
            historyContainer;

        if (isTableHistoryPresent) {
            historyContainer    = tableHistory.find('#text_history');
            historyContainer.jScrollPane({
                showArrows : true
            });
        };

            // Initial parameter for SLAYER
        var parameter = {
                // BASIC SETTINGS
                gameId        : 22,
                gameTitle     : 'Darkorbit',
                dispatcherUrl : '/socialAPI/mailInvite.php',               // The path where you call the dispatcher

                instanceId    : '579',
                affiliateId   : '332',
                userId        : '151430678',                                    // globalID
                userKeyId     : '98026209',                                    // userID (of your game)

                // FACEBOOK SETTINGS
                facebook      : {
                    language  : 'en_US'
                },

                // GOOGLE SETTINGS Vicens
                google        : {
                    language : 'en-US'
                },

                invite           : {
                    currentUsername  : '<?php echo $Users->DataRow['Name']; ?>',                     // After initiating the invite dialog, this functions gets called with information wether it was successful or not
                    hideButton       : true,                            // Default: True \| Wether to show an invite dialog button or not (Set to false if You want to call the dialog directly)
                    /*onComplete       : inviteIncentives.mailInviteCallback(),*/                     // This function gets called after the user closes the Invite Dialog
                    editableUsername : true,
                    showTooltip      : true,
                    /*onReady          : inviteIncentives.mailInviteCallback(),     */                // After initiating the invite dialog, this functions gets called with information wether it was successful or not*/
                    inviteUrl        : 'http://darkorbit.bigpoint.com/',  // Define Your invite url

                    // Tabs
                    defaultTab       : 'Mail',                           // Defines which tab is shown initially. Can be: 'Mail' (default if facebookTab is false), 'Facebook' (default if facebookTab is true) or 'Buddy'
                    facebookTab      : true,                            // Defines wether to show the Facebook tab or not
                    buddyList        : false,                            // Defines wether to show the Buddylist and Friendsearch or not
                    friendSearch     : {
                        enable : false,                                   // Default: False
                        url    : '/socialAPI/friendSearch.php'        // Url to Your search engine
                    }
                },

                // GAME EVENT SERVICE
                events        : {}                                       // You just need to place this empty object inside the initParameter to tell SLAYER it should initiate the GES
            }

            SLAYER.init(parameter);
    });
    </script>

    

            <div class="bodyContainer">
                                <div class="frameTop"></div>
                <div class="frameLeft_top"></div>
                <div class="frameRight_top"></div>
                <div class="contentFrame">
                    <div class="realContainer">
                <div id="dock_content">

    <div id="dock_container" class="fliess10px-weiss">
        <div id="navigation" style="float: left;">
            <style type="text/css" media="screen">    @import "http://darkorbit-22.ah.bpcdn.net/css/cdn/subnav.css?__cv=7014599eddf59246c3b41c90d0475200"; </style>

    <div id="subNavTop">
                <style>
            
            .subNavTextInactiveShip {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_ships&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveShip {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_ships&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveDrone {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_drones&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveDrone {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_drones&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveWeapons {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_weapons&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveWeapons {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_weapons&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveAmmo {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_ammunition&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveAmmo {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_ammunition&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveGenerators {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_generators&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveGenerators {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_generators&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveExtras {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_extras&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveExtras {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_extras&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveBoosters {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_boosters&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveBoosters {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_boosters&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactiveDesigns {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_designs&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActiveDesigns {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_designs&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactivePetGears {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_pet_gear&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActivePetGears {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_pet_gear&f=eurostyle_thea&color=black&bgcolor=grey1);}
            .subNavTextInactivePetProtocols {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=10&t=nav_sub1_hangar_pet_protocols&f=eurostyle_tregcon&color=white&bgcolor=grey);}
            .subNavTextActivePetProtocols {background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/text_tf.esg?l=us&s=9&t=nav_sub1_hangar_pet_protocols&f=eurostyle_thea&color=black&bgcolor=grey1);}
            
        </style>
        <script>
            
            function subNavRollover(name) {
                if (jQuery('#' + name).hasClass('subNavButtonActive') == false) {
                    if (jQuery('#' + name).hasClass('subNavButtonInactive')) {
                        jQuery('#' + name).removeClass('subNavButtonInactive');
                        jQuery('#' + name).addClass('subNavButtonRollover');
                    } else {
                        jQuery('#' + name).removeClass('subNavButtonRollover');
                        jQuery('#' + name).addClass('subNavButtonInactive');
                    }
                }
            }
            
        </script>

        <div id="subNavShip" class="subNavButtonShip subNavButtonInactive" onmouseover="subNavRollover('subNavShip')" onmouseout="subNavRollover('subNavShip')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockShips"><div class="subNavTextInactiveShip"></div></a>
        </div>
        <div id="subNavDrone" class="subNavButtonDrone subNavButtonInactive" onmouseover="subNavRollover('subNavDrone')" onmouseout="subNavRollover('subNavDrone')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockDrones"><div class="subNavTextInactiveDrone"></div></a>
                    </div>
        <div id="subNavWeapons" class="subNavButtonWeapons subNavButtonInactive" onmouseover="subNavRollover('subNavWeapons')" onmouseout="subNavRollover('subNavWeapons')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockLaser"><div class="subNavTextInactiveWeapons"></div></a>
        </div>
        <div id="subNavAmmo" class="subNavButtonAmmo subNavButtonInactive" onmouseover="subNavRollover('subNavAmmo')" onmouseout="subNavRollover('subNavAmmo')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockAmmo"><div class="subNavTextInactiveAmmo"></div></a>
                    </div>
        <div id="subNavGenerators" class="subNavButtonGenerators subNavButtonInactive" onmouseover="subNavRollover('subNavGenerators')" onmouseout="subNavRollover('subNavGenerators')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockGenerator"><div class="subNavTextInactiveGenerators"></div></a>
        </div>
        <div id="subNavExtras" class="subNavButtonExtras subNavButtonActive" onmouseover="subNavRollover('subNavExtras')" onmouseout="subNavRollover('subNavExtras')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockSpecials"><div class="subNavTextActiveExtras"></div></a>
                    </div>
        <div id="subNavPetGears" class="subNavButtonPetGears subNavButtonInactive" onmouseover="subNavRollover('subNavPetGears')" onmouseout="subNavRollover('subNavPetGears')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockPetGear"><div class="subNavTextInactivePetGears"></div></a>
                    </div>
        <div id="subNavPetProtocols" class="subNavButtonPetProtocols subNavButtonInactive" onmouseover="subNavRollover('subNavPetProtocols')" onmouseout="subNavRollover('subNavPetProtocols')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockPetProtocols"><div class="subNavTextInactivePetProtocols"></div></a>
        </div>
        <div id="subNavBoosters" class="subNavButtonBoosters subNavButtonInactive" onmouseover="subNavRollover('subNavBoosters')" onmouseout="subNavRollover('subNavBoosters')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockBooster"><div class="subNavTextInactiveBoosters"></div></a>
                    </div>
        <div  id="subNavDesigns" class="subNavButtonDesigns subNavButtonInactive" onmouseover="subNavRollover('subNavDesigns')" onmouseout="subNavRollover('subNavDesigns')">
            <a href="indexInternal.es?action=internalDock&tpl=internalDockShipModel"><div class="subNavTextInactiveDesigns"></div></a>
                    </div>

        <ul>
            <li title="Ships"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockShips" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=us&lang=us&t=nav_sub1_hangar_ships&f=eurostyle_clan"></a></li>
            <li title="Drones"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockDrones" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=us&lang=us&t=nav_sub1_hangar_drones&f=eurostyle_clan"></a></li>
            <li title="Weapons"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockLaser" style="background-image: url(http://darkorbit-22.ah.bpcdn.net/do_img/global/hangar/subnav_button_405x33.png?__cv=585dbec7500b7493d5c6ed734dd57000);background-position: -268px 0px;"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=us&lang=us&t=nav_sub1_hangar_weapons&f=eurostyle_clan"></a></li>
            <li title="Ammo"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockAmmo" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=us&lang=us&t=nav_sub1_hangar_ammunition&f=eurostyle_clan"></a></li>
            <li title="Generators"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockGenerator" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=us&lang=us&t=nav_sub1_hangar_generators&f=eurostyle_clan"></a></li>
            <li title="Extras"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockSpecials" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=us&lang=us&t=nav_sub1_hangar_extras&f=eurostyle_clan"></a></li>
            <li title="Boosters"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockBooster" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=us&lang=us&t=nav_sub1_hangar_boosters&f=eurostyle_clan"></a></li>
            <li title="Designs"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockShipModel" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=us&lang=us&t=nav_sub1_hangar_designs&f=eurostyle_clan"></a></li>
            <li title="P.E.T./GEAR"><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockPetGear" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=us&lang=us&t=nav_sub1_hangar_pet_gear&f=eurostyle_clan"></a></li>
            <li title="AI PROTOCOLS "><a onfocus="this.blur()" href="indexInternal.es?action=internalDock&tpl=internalDockPetProtocols" ><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/nav_left.esg?s=10&locale=us&lang=us&t=nav_sub1_hangar_pet_protocols&f=eurostyle_clan"></a></li>
        </ul>
            </div>


        </div>

        <!-- ITEM CONTAINER START -->
        <div id="item_container" name="item_container">
            <div id="item_container_overlay"></div>
            <div id="item_scroll_up" name="item_scroll_up"></div>
            <div id="item_scroll_top" name="item_scroll_top"></div>
            <div id="item_scroller">
                <div id="item_list">
	    		                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/resource/logfile_100x100.png?__cv=69a613d0e4cd72e90afd6cdc68fcfb00);">
                            <a id="resource_logfile" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>300 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/resource/booty-key_100x100.png?__cv=ef618aff20a6e2bcc88d806284cfcb00);">
                            <a id="resource_booty-key" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>1,500 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/ajp-01_100x100.png?__cv=d4c05b61300e6f836963dd6d27bb6600);">
                            <a id="equipment_extra_cpu_ajp-01" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>75,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/repbot/rep-1_100x100.png?__cv=40bf974da2bd1ca828036a84bebf3900);">
                            <a id="equipment_extra_repbot_rep-1" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>10,000 C.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/repbot/rep-2_100x100.png?__cv=90cbd18d53f4340e7a28254367338800);">
                            <a id="equipment_extra_repbot_rep-2" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>2,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/repbot/rep-3_100x100.png?__cv=3417fb53c3493f1d8baf68c70e8da400);">
                            <a id="equipment_extra_repbot_rep-3" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>5,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/repbot/rep-4_100x100.png?__cv=f319657ad942b61c8863b6492de48e00);">
                            <a id="equipment_extra_repbot_rep-4" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>20,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/rok-t01_100x100.png?__cv=92eb30597b6a0e5e739c25ca824c4100);">
                            <a id="equipment_extra_cpu_rok-t01" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>10,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/min-t01_100x100.png?__cv=400dcee2a5b91e04547080457ffa8900);">
                            <a id="equipment_extra_cpu_min-t01" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>5,000,000 C.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/min-t02_100x100.png?__cv=e29b05eeb8152c061a02f425c66a7400);">
                            <a id="equipment_extra_cpu_min-t02" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>25,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/nc-rrb-x_100x100.png?__cv=862d24f30519c5e53a13f4d3ec995500);">
                            <a id="equipment_extra_cpu_nc-rrb-x" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>10,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/cl04k-xs_100x100.png?__cv=5579d611e2f505fd3317a4ee4e70ee00);">
                            <a id="equipment_extra_cpu_cl04k-xs" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>500 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/arol-x_100x100.png?__cv=30df149638e4298594447363931c9a00);">
                            <a id="equipment_extra_cpu_arol-x" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>25,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/cl04k-m_100x100.png?__cv=44ceb70cb4a7cfd94ec4b75708208a00);">
                            <a id="equipment_extra_cpu_cl04k-m" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>5,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/cl04k-xl_100x100.png?__cv=5378f0fbbdf4e36ee572672a89967e00);">
                            <a id="equipment_extra_cpu_cl04k-xl" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>22,500 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/nc-awb-x_100x100.png?__cv=b4df32b610682314306316c06eed2600);">
                            <a id="equipment_extra_cpu_nc-awb-x" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>10,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/nc-awr-x_100x100.png?__cv=dd4d95f1e348e27ba53a6edf5f0ae000);">
                            <a id="equipment_extra_cpu_nc-awr-x" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>150,000 C.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/nc-awl-x_100x100.png?__cv=6fdf3acc1f31b4df0c353bbcd470f400);">
                            <a id="equipment_extra_cpu_nc-awl-x" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>15,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/g3x-crgo-x_100x100.png?__cv=52722009436318d043bee1373878f500);">
                            <a id="equipment_extra_cpu_g3x-crgo-x" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>10,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/g3x-amry-s_100x100.png?__cv=f1f5786b7dad796b927debefcad24800);">
                            <a id="equipment_extra_cpu_g3x-amry-s" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>5,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/g3x-amry-m_100x100.png?__cv=b3287b51cb87d9da908c44fb22bc5000);">
                            <a id="equipment_extra_cpu_g3x-amry-m" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>10,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/g3x-amry-l_100x100.png?__cv=70e1d6e1de75b7db34bb8859382a2600);">
                            <a id="equipment_extra_cpu_g3x-amry-l" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>20,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/sle-01_100x100.png?__cv=99ea1c9b0f2945903e1940e185656000);">
                            <a id="equipment_extra_cpu_sle-01" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>600,000 C.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/sle-02_100x100.png?__cv=9220f90c1874ed7d71b696d38d12e600);">
                            <a id="equipment_extra_cpu_sle-02" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>75,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/sle-03_100x100.png?__cv=4676fbf3832998139092e35c0b6e8000);">
                            <a id="equipment_extra_cpu_sle-03" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>150,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/sle-04_100x100.png?__cv=688a792d359998af68958acb7fbce500);">
                            <a id="equipment_extra_cpu_sle-04" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>250,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/dr-01_100x100.png?__cv=ac134270b2d6c46d48ff94bfbacfa300);">
                            <a id="equipment_extra_cpu_dr-01" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>150,000 C.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/dr-02_100x100.png?__cv=2cd2ee99cfa7e803424786d9db551900);">
                            <a id="equipment_extra_cpu_dr-02" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>15,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/rd-x_100x100.png?__cv=597c2f3075c6a0453bae7dd1902dda00);">
                            <a id="equipment_extra_cpu_rd-x" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>15,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/jp-01_100x100.png?__cv=5632c2889dd72df6178de4f1f579e100);">
                            <a id="equipment_extra_cpu_jp-01" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>150,000 C.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/jp-02_100x100.png?__cv=4c714d0033db967ba3a2720032ae8800);">
                            <a id="equipment_extra_cpu_jp-02" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>15,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/fb-x_100x100.png?__cv=e06d39c29ea36fb5e9327bd606e95200);">
                            <a id="equipment_extra_cpu_fb-x" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>5,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/alb-x_100x100.png?__cv=21e336721d12e791fb7e7c6414d86300);">
                            <a id="equipment_extra_cpu_alb-x" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>15,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/rb-x_100x100.png?__cv=0a0c408176a8fa5c7dd6f6a004164a00);">
                            <a id="equipment_extra_cpu_rb-x" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>15,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/smb-01_100x100.png?__cv=ad7e7ff45f564293dcac06b878e57b00);">
                            <a id="equipment_extra_cpu_smb-01" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>50,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/ish-01_100x100.png?__cv=ba929c263af782b8fb64046ee2b94d00);">
                            <a id="equipment_extra_cpu_ish-01" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>50,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/nc-agb-x_100x100.png?__cv=0a6203985f4baacdba419e68daef9700);">
                            <a id="equipment_extra_cpu_nc-agb-x" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>15,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/aim-01_100x100.png?__cv=9b5cb30e69d3871b077b2c9a16138600);">
                            <a id="equipment_extra_cpu_aim-01" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>20,000,000 C.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/aim-02_100x100.png?__cv=b8d5a02cf8bd3f5080007615048d0d00);">
                            <a id="equipment_extra_cpu_aim-02" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>200,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/cpu/rllb-x_100x100.png?__cv=c02ef79c7fb09afb18efa7bacb68e300);">
                            <a id="equipment_extra_cpu_rllb-x" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>25,000 U.</strong>
                        </div>
                    </div>
                                    <div class="item">
                        <div class="itemList_singleItem" style="background-image:url(http://darkorbit-22.ah.bpcdn.net/do_img/global/items/equipment/extra/hmd-07_100x100.png?__cv=13dee6dcb1f39fc812db55e2db0ec800);">
                            <a id="equipment_extra_hmd-07" href="javascript:void(0);">
                                <div class="item_borders">
                                    <div class="item_hover"></div>
                                    <div class="item_active"></div>
                                </div>
                            </a>
                        </div>
                        <div class="itemList_singlePrice fliess11px-weiss">
                            <strong>Payment</strong>
                        </div>
                    </div>
                                </div>
            </div>
            <div id="item_scroll_down"></div>
            <div id="item_scroll_bottom"></div>
        </div>
        <!-- ITEM CONTAINER END -->

        <!-- PREVIEW CONTAINER START -->
        <div id="preview_container">
            <div id="preview">
                <div id="previewMovie">
                    <div></div>
                </div>
            </div>
            <div id="info">
                <div id="name" class="info_other_value"></div>
                <div id="scroll-content" class="info_other_value"></div>
            </div>
        </div>
        <!-- PREVIEW CONTAINER END -->

        <!-- BUY FRAME START -->
        <div id="buy_container">
            <div id="buy_itemName"></div>

            <div id="levelSelector">
                <div class="label">Level:</div>
                <div id="levelScrollUp" class="scrollArrow"></div>
                <div id="levelScrollContainer">
                    <div id="levelList">
                        <div class="level enabled" id="level1"></div>
                        <div class="level enabled" id="level2"></div>
                        <div class="level enabled" id="level3"></div>
                        <div class="level" id="level4"></div>
                        <div class="level" id="level5"></div>
                        <div class="level" id="level6"></div>
                        <div class="level" id="level7"></div>
                        <div class="level" id="level8"></div>
                        <div class="level" id="level9"></div>
                        <div class="level" id="level10"></div>
                    </div>
                </div>
                <div id="levelScrollDown" class="scrollArrow"></div>
            </div>

            <div id="amountSelector">
                <div class="label">Quantity</div>
                <div class="amountPreset" id="five"></div>
                <div class="amountPreset" id="ten"></div>
                <div class="amountPreset" id="twenty"></div>
                <div class="amountPreset" id="hundred"></div>
                <div class="amountPreset" id="thousand"></div>
                <div class="amountPreset" id="max"></div>
                <div id="arrow"></div>
                <div id="stepper">
                    <div class="control" id="minus"></div>
                    <input type="text" id="selectedAmount" value="1" />
                    <div class="control" id="plus"></div>

                </div>
            </div>
            
            <div id="nameSelector">
                <label for="itemName">P.E.T. name</label>
                <input type="text" id="itemName" name="itemName" value="" maxlength="16" />
            </div>

            <div id="discount"></div>

            <div id="buy_price">
                <input type="hidden" id="itemPrice" name="itemPrice" value="">
                <input type="text" id="sellPrice" name="sellPrice" readonly="readonly" value="">
            </div>
            <div id="buy_button" class="purchase">
                <div id="buy_button_text" style='background-image: url("/do_img/global/text_tf.esg?l=us&s=14&t=shop_buy&f=eurostyle_thea&color=white&bgcolor=grey");'></div>
            </div>
            
            <div id="subscription_button" class="purchase">
                <div id="start" style="background-image:url(/do_img/global/text_tf.esg?l=us&s=14&t=booster_subscribe&f=eurostyle_thea&color=white&bgcolor=grey);"></div>
                <div id="stop" style="background-image:url(/do_img/global/text_tf.esg?l=us&s=14&t=booster_subscription_cancel&f=eurostyle_thea&color=white&bgcolor=grey&auto_br=1&auto_br_size=11);"></div>
            </div>
        </div>
        <!-- BUY FRAME END -->
    </div>
</div>

</div><!-- END contentFrame -->
</div><!-- END realContainer -->

<div class="footerContainer">
    <div class="frameLeft_bottom"></div>
    <div class="frameRight_bottom"></div>
    <div class="frameBottom"></div>

<div id="alertBox" class="fliesstext"></div>
<div id="imprint" style="width:523px;height:600px;" class="fliesstext">
    <div id="imprint_close"><a href="javascript:void(0);" onclick="closeInfo('imprint');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/intro/but_close.png?__cv=4addfeeb6d889c0632072f85386d1900" alt="" /></a></div>
    <div id="imprint_text"><b>Bigpoint S.à.r.l. and Co, SCS</b><br>Building Vertigo - Polaris<br>2-4 rue Eugène Ruppert<br>L-2453 Luxemburg<br><br><b>Our business portal</b><br><a class="" href="http://www.bigpoint.net" target="_blank">http://www.bigpoint.net</a><br><br><b>Corporate information</b><br>CEO: Bigpoint S.à.r.l.<br>Jeronimo Folgueira<br>Court of registry: R.C.S. Luxemburg<br>Trade register number: B 167809<br>VAT number: LU 25331016<br><br><b>Disclaimer</b><br>Although every effort is made to present current and accurate information, we cannot assume responsibility for information from external links. The author of each web page is solely responsible for the content of that page.<br><br><b>Contact</b><br>Telephone <b>(no Support)</b>: +352 261 911 3515<br>Fax: +352 49 48 48 6606<br><br><b>Questions or problems? Contact Support</b><br>E-mail: <a class="gl_imprint_support_link" href="/index.es?action=support">Support form</a><br>Internet: http://www.bigpoint.com<br><br><b>Commissioner for Youth Protection</b><br>Lawyer Dr. Andreas Lober<br>SCHULTE RIESENKAMPFF Rechtsanwaltsgesellschaft mbH<br />An der Hauptwache 7<br />60313 Frankfurt am Main<br>E-mail: jugendschutzbeauftragter@bigpoint.com<br><br><b>Data protection officer</b><br>E-mail: privacy@bigpoint.net<br><a style="text-decoration: underline" class="" href="/index.es?action=info&subAction=privacyPolicy" target="_blank">Data Privacy Policy</a></div>
</div>
<div id="teamCreditsBox" style="height:600px;" class="fliesstext">
    <div id="teamCredits_close"><a href="javascript:void(0);" onclick="closeInfo('teamCreditsBox');"><img src="http://darkorbit-22.ah.bpcdn.net/do_img/global/intro/but_close.png?__cv=4addfeeb6d889c0632072f85386d1900" alt="" /></a></div>
    <div id="container_teamcredits" style="height: 528px;">
        <div id="teamCredits_text">

            <ul id="main">
                <li id="head"></li>
                <li id="description">The action-packed Space MMO for your browser</li>
                <li id="producers">
                    <ul>
                        <li id="pr title">Producer</li>
                        <li>Savas Ziplies<li>
                        <li>Matthew <i>"\-Sephiroth-/"</i> Milligan</li>
                    </ul>
                </li>
                <li id="pm">
                    <ul>
                        <li id="pm title">Project Manager</li>
                        <li>Johannes Wieland</li>
                    </ul>
                </li>
                <li id="gd">
                    <ul>
                        <li id="gd title">Game Design</li>
                        <li>Benjamin <i>"Radovan8"</i> Cory</li>
                        <li>Jonathan Lindsay</li>
                    </ul>
                </li>
                <li id="dev">
                    <ul>
                        <li id="dev title">Development</li>
                        <li>
                            <ul id="table1">
                                <li id="table1_col1">
                                    <ul id="dev1">
                                        <li>Jürgen <i>"Joncek"</i> Frerichs</li>
                                        <li>Erik Haddenhorst</li>
                                        <li>Christian <i>"krischan"</i> Franke</li>
                                        <li>Sebastian <i>"afriend"</i> Trier</li>
                                        <li>Oliver <i>"Pakkanen"</i> Michels</li>
                                        <li>Tim Balzer</li>
                                    </ul>
                                </li>
                                <li id="table1_col2">
                                    <ul id="dev2">
                                        <li>Stephan <i>"bananajoe"</i> Krause</li>
                                        <li>Sebastian <i>"luttz"</i> Jauert</li>
                                        <li>Dennis <i>"nop0x90"</i> Bikowski</li>
										<li>Maciej <i>"maac1"</i> Kozlowski</li>
                                    </ul>
                                </li>
                                <li id="table1_col3">
                                    <ul id="dev3">
                                        <li>Thomas <i>"Pogrim"</i> Garschke</li>
                                        <li>Dennis Kopp</li>
                                        <li>Ronny Gericke</li>
                                        <li>Vicens Fayos</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <div class="clearMe"></div>
                <li id="graphics">
                    <ul>
                        <li id="graphic title">Graphics</li>
                        <li>Young-il Shim</li>
                        <li>Marko Vajagic</li>
                        <li>Ivan Kantarovich</li>
                    </ul>
                </li>
                <li id="qa">
                    <ul>
                        <li id="qa title">Quality Assurance</li>
                        <li>Kathrin <i>"..Lysi.."</i> Schulte</li>
                        <li>Fryderyk <i>"The*End*is*Nigh"</i> Bannasch</li>
                        <li>Annemieke <i>"Ripley"</i> Böhm</li>
                        <li>Siegfried Jensen</li>
                    </ul>
                </li>
                <li id="cm">
                    <ul>
                        <li id="cm title">Community Management</li>
                        <li>Jan Lamely</li>
                        <li>Dang-Stefan La Hong</li>
                    </ul>
                </li>
                <li id="interns">
                    <ul>
                        <li id="interns title">Interns</li>
                        <li>Mustafa Kaan Tanrisever</li>
                        <li>Lian <i>"The Case"</i> Li</li>
                    </ul>
                </li>
                <li id="thanks">
                    <ul>
                        <li id="thanks title">Special thanks to</li>
                        <li>
                            <ul id="table2">
                                <li id="table2_col1">
                                    <ul id="thanks1">
                                    	<li>Christopher <i>"chr1zm0"</i> Baumbach</li>
                                        <li>Terence <i>"harle80"</i> Viban</li>
                                        <li>James Valadas Marques</li>
										<li>Serdar <i>"mcballi75"</i> Balli</li>
                                        <li>Ralf Baumann<li>
										<li>Christian <i>"Guezli"</i> Oberle</li>
										<li>Mathias <i>"mblpz"</i> Böttcher</li>
										<li>Stephan Scholz</li>
										<li>Nurdogan <i>"bomfirit"</i> Erdem</li>
										<li>Roman Fuhrer</li>
                                        <li>Maik <i>"Shiznik"</i> Jefferies</li>
                                    </ul>
                                </li>
                                <li id="table2_col2">
                                    <ul id="thanks2">
                                    	<li>David <i>"redgeneral"</i> Kempf</li>
                                        <li>Jens Christian Beyer</li>										
										<li>Maximilian Mantz</li>
                                        <li>Ron <i>"joenase"</i> Zenczykowski</li>
										<li>Wolfgang Timme</li>                                        
                                        <li>Florian Liss</li>
                                        <li>Alexander <i>"DM47"</i> Stein</li>                                        
										<li>Marco <i>"BPHorst"</i> Geweke</li>
                                        <li>Christian Godorr</li>
                                        <li>Jonathan <i>"rushworth10"</i> Rushworth</li>
                                        <li>Dirk Schmidt</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div> <!--text -->
    </div> <!-- container -->
</div>

<script type="text/javascript" id="sourcecode">

    jQuery(function()
    {
        jQuery('#teamCredits_text').jScrollPane({autoReinitialise: true, showArrows: true});
    });

</script>

    <div id="imprint_ingame" class="fliesstext"
         style="position:absolute; left:40px; top:24px; height:15px;">
                    <a href="javascript:void(0);" onclick="showFooterLayer('imprint');">
                Legal information</a> |
                <a href="javascript:void(0);" onclick="showFooterLayer('teamCreditsBox')">Credits</a> |
        <a href="/GameAPI.php?action=portal.redirectToBoard" target="_blank">Forum</a>
    </div>


    


    <div id="banner-bottom" align="center">
    <!-- affiliateBanner: banner enabled --><script type="text/javascript" src="http://adin-www.bigpoint.net/adxx.php?pid=4&source=country%3DIT%26areaID%3Dinternal.trade%26aid%3D332%26acm%3D%26acr%3D579%26aip%3D%26gameID%3D579%26uid%3D98026209%26locale%3Dus&sign=VjGMHKBRZM%2FgeKU32s5RdIY1t5kPc2mXfH8lESup"></script>    </div>
</div><!-- End footerContainer -->
</div><!-- End bodyContainer -->
</div><!-- End outerContainer -->
</div><!-- End overallContainer -->
</div>




<!-- affiliateEndTag -->
<!-- SEMGOOGLE RTPixel START --><!-- Google Code for DO All Visitors Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 987297406;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "666666";
var google_conversion_label = "jcNlCILztAIQ_uzj1gM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/987297406/?label=jcNlCILztAIQ_uzj1gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- SEMGOOGLE RTPixel END --><!-- SensorT-Bigpoint - Page View - START -->
<script type="text/javascript" language="JavaScript" src="https://akimu.bigpoint.com/trk?rt=1&ti=3547&cs=8377&aid=332&aip=&pid=579&ppid=22&language=en&country=IT&ctype=0&ts=1369447564&mid=151430678&jsopenclose=false"></script>
<!-- SensorT-Bigpoint - Page View - END -->

<!-- SensorT-Bigpoint - SEA-SEO Pageview - START -->
<script type="text/javascript">
(function() {
var s = null, sp = null, se = null, st = null, r = document.referrer, res = null; 
if (!r) return;
if (r.indexOf("google") >= 0) {
se = "google"; sp = "q";
} else if (r.indexOf("bing") >= 0) {
se = "bing"; sp = "q";
} else if (r.indexOf("yahoo") >= 0) {
se = "yahoo"; sp = "p";
} else {
return;
}
var idx = r.indexOf("?") + 1;
if (idx > 0) {
var p = r.substr(idx).split("&");
for (var i = 0; i < p.length; i++) {
var kv = p[i].split("=");
if (kv[0] == sp) {
s = kv[1];
} else if (se == "google" && kv[0] == "url") {
st = "seo";
} else if (se == "google" && kv[0] == "adurl") {
st = "sea";
}
if (s && st) {
break;
}
}
}
if (s) {
res = '<scr' + 'ipt type="text/javascript" src="http://akimu.bigpoint.com/trk?rt=1&ti=3549&cs=5764&aid=332&aip=&pid=579&ppid=22&language=en&country=IT&ctype=0&ts=1369447564&searchQuery=' + s;
}
if (res && st) {
res = res + "&searchType=" + st;
}
if (res) {
res = res + "&ts=" + new Date().getTime() + '"></scr' + "ipt>";
document.write(res);
if (st && st == "seo" && 1) {
document.write('<scr' + 'ipt type="text/javascript" src="http://akimu.bigpoint.com/ads?rt=2&et=35&se=m&bi=[bookedInsertionId]&cs=[cs]&ev=' + s + '&ts=' + new Date().getTime() + '"></scr' + 'ipt>');
}
}
})();
</script>
<!-- SensorT-Bigpoint - SEA-SEO Pageview - END --><!-- BPID --><script language="javascript">window.bpid=window.bpid||{};window.bpid.callbacks=window.bpid.callbacks||[];window.bpid.callbacks.push(function(bpid) {document.cookie="__bpid="+bpid+";path=/;expires=Fri, 03 Jun 2022 13:59:24 GMT;";if (bpid != "519f88563pOYBeOtZmO5SSdj6WzvwH7B") {try {var xhr = new XMLHttpRequest();xhr.open("GET", "\/GameAPI.php?action=core.bpid&bpid="+bpid, true);xhr.send(null);} catch(e) {}}});</script><script language="javascript" src="//assets.bpsecure.com/bpid/bpid.js?ts=380402" defer="defer"></script><!-- /BPID --><script type="text/javascript">var _gaq = _gaq || [];_gaq.push(['_gat._anonymizeIp']);_gaq.push(['_setDomainName', 'none']);_gaq.push(['_setAllowLinker', true]);_gaq.push(['_setAllowHash', false]);_gaq.push(['_setCustomVar', 1, 'aid', '332', 2]);_gaq.push(['_setCustomVar', 2, 'aip', '', 2]);_gaq.push(['_setCustomVar', 3, 'ait', 'keyword', 2]);_gaq.push(['_setCustomVar', 4, 'areaID', 'internal.trade', 2]);_gaq.push(['_setAccount', 'UA-1848713-1']);_gaq.push(['_trackPageview', '/indexInternal.es?action=internalDock&tpl=internalDockSpecials&areaID=internal.trade']);_gaq.push(['_trackPageLoadTime']);_gaq.push(['_setAccount', 'UA-17685913-1']);_gaq.push(['_trackPageview', '/indexInternal.es?action=internalDock&tpl=internalDockSpecials&areaID=internal.trade']);_gaq.push(['_trackPageLoadTime']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = 'http://www.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>

<!-- SZM VERSION="1.5" -->
<script type="text/javascript">
<!--
var IVW="http://bigpoint.ivwbox.de/cgi-bin/ivw/CP/5201gamecont;/spiele/darkorbit";
document.write("<img src=\""+IVW+"?r="+escape(document.referrer)+"&d="+(Math.random()*100000)+"\"width=\"1\" height=\"1\" alt=\"\" />");
//-->
</script>
<noscript>
<img src="http://bigpoint.ivwbox.de/cgi-bin/ivw/CP/5201gamecont;/spiele/darkorbit";
width="1" height="1" alt="" />
</noscript>
<!-- /SZM -->




<script type="text/javascript">
    
    if (jQuery('#toolbar').length > 0) {
        jQuery('#toolbar').css('float', 'none');
        jQuery('body').css('background-position', 'center 30px');
    }
    
</script>
<link rel="stylesheet" type="text/css" href="http://darkorbit-22.ah.bpcdn.net/resources/css/popup.css?__cv=4e58da2dec4df33ee5f4c239848dda00" />
<div id="popup">
    <div class="header">
        <div class="button-close"></div>
    </div>
    <div class="body">
        <div class="icon icon-question"></div>
        <div class="icon icon-error"></div>
        <div class="icon icon-success"></div>
        <div class="content fliess13px-grey"></div>
    </div>
    <div class="footer single-button">
        <div class="button button-green">
            <div class="text" style="background-image: url(/do_img/global/text_tf.esg?s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey);"></div>
        </div>
        <div class="button button-blue">
            <div class="text" style="background-image: url(/do_img/global/text_tf.esg?s=12&t=confirmBox_cancel&f=eurostyle_thea&color=white&bgcolor=grey);"></div>
        </div>
    </div>
</div>
<div id="popup-modalBackground"></div>
<img id="popup-loading" alt="Loading..." src="http://darkorbit-22.ah.bpcdn.net/do_img/global/pilotSheet/profilePage/loadingAnimation.gif" />

<!-- LayertoolService JavaScript Injection start -->
<script type="text/javascript">
    //<![CDATA[
    // add fancybox css to the head
    var cssLink  = document.createElement('link');
    cssLink.type = 'text/css';
    cssLink.rel  = 'stylesheet';
    cssLink.href = 'http://lts-920.ah.bpcdn.net/application/fancybox/jquery.fancybox-1.3.4.css';
    document.getElementsByTagName('head')[0].appendChild(cssLink);
    //]]>
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="http://lts-920.ah.bpcdn.net/application/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="http://lts-920.ah.bpcdn.net/application/client/client.js"></script>
<script type="text/javascript" src="http://lts-920.ah.bpcdn.net/application/cookie/jquery.cookie.js"></script>
<script type="text/javascript">var jQueryLts = jQuery.noConflict(true);</script>
<script type="text/javascript">
    //<![CDATA[
    jQueryLts('document').ready(function() {
        try {
            var serviceLinks = ['http://lts-920.ah.bpcdn.net/579/us/IT/-14400/332','http://lts-920.ah.bpcdn.net/email/579/us'];
            var paymentURL   = 'https://ssl.bigpoint.net/billing/?req=YToxMjp7czo2OiJ1c2VySUQiO3M6ODoiOTgwMjYyMDkiO3M6ODoidXNlcm5hbWUiO3M6ODoiemlvcGlvNzAiO3M6ODoibWVtYmVySUQiO3M6OToiMTUxNDMwNjc4IjtzOjQ6ImJwaWQiO3M6MzI6IjUxOWY4ODU2M3BPWUJlT3RabU81U1NkajZXenZ3SDdCIjtzOjc6InVzZXJBZ2UiO2k6NDM7czoxNDoiZmJfYXBwbGljYXRpb24iO2I6MDtzOjk6InByb2plY3RJRCI7czozOiI1NzkiO3M6MzoiYWlkIjtpOjMzMjtzOjM6ImFpcCI7czowOiIiO3M6NDoibGFuZyI7czoyOiJlbiI7czozOiJkZXYiO2I6MDtzOjQ6InRpbWUiO2k6MTM2OTQ0NzU2Mzt9&aid=332&aip=&hash=e200ab8a0fde000d05f19c3d9840fc19';
            BPLayertool2.Helper.setPaymentLink(paymentURL);
            BPLayertool2.Helper.setUserId(98026209);
            BPLayertool2.Helper.setRequestTime(1369447563);
            BPLayertool2.Helper.setServices(serviceLinks);
            BPLayertool2.JSONPRequest.setRequestURL(serviceLinks[0]);
            BPLayertool2.JSONPRequest.doRequest(BPLayertool2.LayerView.prepareView);
        } catch (Exception) {
            if (true === Boolean(console.log)) {
                console.log(Exception);
            } else {
                throw Exception;
            };
        }
    });
    //]]>
</script>
<!-- LayertoolService JavaScript Injection end -->


</body>
</html>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/tools.js?__cv=dbf397d8f53a66282288cd58ecd1ef00"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/tools/text.js?__cv=8ded3f24f8df7744dc6eb60fab030a00"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/tools/popup.js?__cv=7fa3aa8618c738cdf12bceb763b4bf00"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/tools/errorHandler.js?__cv=e28fe3fd582bcb0eb8baf8b3c4f9ad00"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/tools/repeatCaller.js?__cv=8ecf93544d74ff651e0e99316e884800"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/library.js?__cv=a3c8d3e4f0d23405a758131039a03d00"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/user.js?__cv=b79aef5e50246af886bf99f0a7678400"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/user/ship.js?__cv=a335646e993460d68d3eb7c4209ff700"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/user/pet.js?__cv=f4220b67b3f030efae394ad3d33a8200"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/shop.js?__cv=e7b25b1984ad85a6e60f531839a8e100"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/shop/item.js?__cv=b24f6606535c8c3718544c0a026ca100"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/shop/itemlist.js?__cv=772235ec79f92a0c81216c1defee4300"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/shop/amountSelector.js?__cv=42e46d55c6158a869c031ddc079cb100"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/shop/nameSelector.js?__cv=bf64cd925dd72ef16a1433aceacbcb00"></script>
<script type="text/javascript" src="http://darkorbit-22.ah.bpcdn.net/resources/js/shop/levelSelector.js?__cv=8f111727c6bc6e899ae0090e39d39900"></script>
<script type="text/javascript">

    jQuery.noConflict();
    jQuery(document).ready(function(){
        /**
         * Initialize DarkOrbit shop
         */
        Shop.Initialize();
    });

    function expressInstallCallback(info) {
        // possible values for info: loadTimeOut|Cancelled|Failed
        jQuery("#previewMovie").php("You need version 10.0 to view this content");
    }

    /**
     * Parameters for object.
     * Used as an interface with the action.
     */
    Shop.Parameters = {
        category        : 'special',
        paymentLink     : 'indexInternal.es?action=internalPayment',
        itemRows        : [],
        itemData        : {"resource_logfile":{"category":"special","name":"Log-disks","nameShort":"LOG-DISKS","description":"Log-disks can be exchanged for pilot points.","price":300,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_181_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"L-D","item_caption":"LOG-DISKS","item_prefix":"special","item_id":181,"item_cv":"fc187ed232b3bde6da6f12919a2f4a00","price_plain":"300 U.","event_item_enabled":0,"loot_id":"resource_logfile"}},"itemListImageUrl":"\/do_img\/global\/items\/resource\/logfile_100x100.png?__cv=69a613d0e4cd72e90afd6cdc68fcfb00","cost":"300 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"resource_booty-key":{"category":"special","name":"Green Booty Key","nameShort":"BOOTY KEY","description":"Used to open pirate booty and collect the valuable treasure contained within.","price":1500,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_183_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"BK-100","item_caption":"BOOTY+KEY","item_prefix":"special","item_id":183,"item_cv":"04b03093f3befc2435b437a0fc10f800","price_plain":"1,500 U.","event_item_enabled":0,"loot_id":"resource_booty-key"}},"itemListImageUrl":"\/do_img\/global\/items\/resource\/booty-key_100x100.png?__cv=ef618aff20a6e2bcc88d806284cfcb00","cost":"1,500 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_ajp-01":{"category":"special","name":"Advanced Jump CPU 1","nameShort":"ADVANCED JUMP CPU","description":"Allows you to jump to any of the valid target maps. May not be used during battle.<br \/><br \/>Only one of these items is allowed per configuration.","price":75000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_201_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"AJP01+CPU","item_caption":"ADVANCED+JUMP+CPU","item_prefix":"special","item_id":201,"item_cv":"4a4e0ea77e2340e663eef19439877800","price_plain":"75,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_ajp-01"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/ajp-01_100x100.png?__cv=d4c05b61300e6f836963dd6d27bb6600","cost":"75,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_repbot_rep-1":{"category":"special","name":"Repair Robot 1","nameShort":"Repair bot","description":"Repairs up to 5,000 HP per minute<br \/><br \/>Only one of these items is allowed per configuration.","price":10000,"currency":"virtual","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_21_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":0,"item_name":"REP-1","item_caption":"Repair+bot","item_prefix":"special","item_id":21,"item_cv":"e8b966f1b2ac7454d294172838b2c900","price_plain":"10,000 C.","event_item_enabled":0,"loot_id":"equipment_extra_repbot_rep-1"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/repbot\/rep-1_100x100.png?__cv=40bf974da2bd1ca828036a84bebf3900","cost":"10,000 C.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_repbot_rep-2":{"category":"special","name":"Repair Robot 2","nameShort":"Repair bot","description":"Repairs up to 20,000 HP per minute<br \/><br \/>Only one of these items is allowed per configuration.","price":2000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_22_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"REP-2","item_caption":"Repair+bot","item_prefix":"special","item_id":22,"item_cv":"9f50c78c70fff2844e97eb1d58941e00","price_plain":"2,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_repbot_rep-2"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/repbot\/rep-2_100x100.png?__cv=90cbd18d53f4340e7a28254367338800","cost":"2,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_repbot_rep-3":{"category":"special","name":"Repair Robot 3","nameShort":"Repair bot","description":"Repairs up to 50,000 HP per minute<br \/><br \/>Only one of these items is allowed per configuration.","price":5000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_23_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"REP-3","item_caption":"Repair+bot","item_prefix":"special","item_id":23,"item_cv":"22a269c7414a5f0d53a8b9bf6daa2d00","price_plain":"5,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_repbot_rep-3"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/repbot\/rep-3_100x100.png?__cv=3417fb53c3493f1d8baf68c70e8da400","cost":"5,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_repbot_rep-4":{"category":"special","name":"Repair robot 4","nameShort":"Repair bot","description":"Repairs up to 75,000 HP per minute<br \/><br \/>Only one of these items is allowed per configuration.","price":20000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_24_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"REP-4","item_caption":"Repair+bot","item_prefix":"special","item_id":24,"item_cv":"29a9036012059ea5b7e43e9e75da8400","price_plain":"20,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_repbot_rep-4"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/repbot\/rep-4_100x100.png?__cv=f319657ad942b61c8863b6492de48e00","cost":"20,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_rok-t01":{"category":"special","name":"Rocket Turbo","nameShort":"Rocket Turbo","description":"Doubles rocket firing speed<br \/><br \/>Only one of these items is allowed per configuration.","price":10000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_31_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"ROK-T01","item_caption":"Rocket+Turbo","item_prefix":"special","item_id":31,"item_cv":"a0eb287c68f234440b5bdeeb1387f000","price_plain":"10,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_rok-t01"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/rok-t01_100x100.png?__cv=92eb30597b6a0e5e739c25ca824c4100","cost":"10,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_min-t01":{"category":"special","name":"Turbo Mine CPU 1","nameShort":"TURBO MINE","description":"25% less cool-down time for mines and items made from mines<br \/><br \/>Only one of these items is allowed per configuration.","price":5000000,"currency":"virtual","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_32_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":0,"item_name":"MINT01+CPU","item_caption":"TURBO+MINE","item_prefix":"special","item_id":32,"item_cv":"14e030c96b083d209e9e08a30fd55b00","price_plain":"5,000,000 C.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_min-t01"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/min-t01_100x100.png?__cv=400dcee2a5b91e04547080457ffa8900","cost":"5,000,000 C.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_min-t02":{"category":"special","name":"Turbo Mine CPU 2","nameShort":"TURBO MINE CPU","description":"50% less cool-down time for mines and items made from mines<br \/><br \/>Only one of these items is allowed per configuration.","price":25000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_33_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"MINT02+CPU","item_caption":"TURBO+MINE+CPU","item_prefix":"special","item_id":33,"item_cv":"bcd35dd0597330a489b1251b4a302000","price_plain":"25,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_min-t02"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/min-t02_100x100.png?__cv=e29b05eeb8152c061a02f425c66a7400","cost":"25,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_nc-rrb-x":{"category":"special","name":"Repair-bot Auto CPU","nameShort":"Repair-bot Auto CPU","description":"Auto-activates a repair robot available<br \/><br \/>Only one of these items is allowed per configuration.","price":10000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_41_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"NC-RRB+CPU","item_caption":"Repair-bot+Auto+CPU","item_prefix":"special","item_id":41,"item_cv":"af34b34686ffa4bf575d4b5bc3c94600","price_plain":"10,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_nc-rrb-x"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/nc-rrb-x_100x100.png?__cv=862d24f30519c5e53a13f4d3ec995500","cost":"10,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_cl04k-xs":{"category":"special","name":"Cloaking Device Type A","nameShort":"Cloaking device","description":"Ship stays cloaked until your first attack<br \/><br \/>WARNING: Enemies can still see cloaked ships on the mini map.<br \/><br \/>Only one of these items is allowed per configuration.","price":500,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_51_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"CL04K-MOD","item_caption":"Cloaking+device","item_prefix":"special","item_id":51,"item_cv":"f84979f3973105c68ea58d5786687b00","price_plain":"500 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_cl04k-xs"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/cl04k-xs_100x100.png?__cv=5579d611e2f505fd3317a4ee4e70ee00","cost":"500 U.","isAmountSetable":false,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_arol-x":{"category":"special","name":"Auto Rocket CPU","nameShort":"AUTO ROCKET CPU","description":"Automatic rocket rapid-fire in laser attacks you start<br \/><br \/>After installation is completed, the AROL-X CPU must be activated on the space map in \"CPUs\".<br \/><br \/>Only one of these items is allowed per configuration.","price":25000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_42_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"AROL-X","item_caption":"AUTO+ROCKET+CPU","item_prefix":"special","item_id":42,"item_cv":"1e649e022d0a50524ca7d8059b24f700","price_plain":"25,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_arol-x"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/arol-x_100x100.png?__cv=30df149638e4298594447363931c9a00","cost":"25,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_cl04k-m":{"category":"special","name":"Cloaking CPU","nameShort":"Cloaking CPU","description":"10 ship cloakings (active until your first attack)<br \/><br \/>WARNING: Enemies can still see cloaked ships on the mini map.<br \/><br \/>Only one of these items is allowed per configuration.","price":5000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_52_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"CL04K+CPU","item_caption":"Cloaking+CPU","item_prefix":"special","item_id":52,"item_cv":"9279bab384407926f1a319dfbeef8e00","price_plain":"5,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_cl04k-m"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/cl04k-m_100x100.png?__cv=44ceb70cb4a7cfd94ec4b75708208a00","cost":"5,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_cl04k-xl":{"category":"special","name":"Cloaking CPU XL","nameShort":"CLOAKING CPU XL","description":"Cloak your ship 50 times and stay invisible until you launch an attack yourself.<br \/><br \/>WARNING: Enemies can still see cloaked ships on the mini map.<br \/><br \/>Only one of these items is allowed per configuration.","price":22500,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_53_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"CL04K+CPU+XL","item_caption":"CLOAKING+CPU+XL","item_prefix":"special","item_id":53,"item_cv":"1f02db3e27156f007417c0de124a6900","price_plain":"22,500 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_cl04k-xl"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/cl04k-xl_100x100.png?__cv=5378f0fbbdf4e36ee572672a89967e00","cost":"22,500 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_nc-awb-x":{"category":"special","name":"Lab CPU","nameShort":"AUTO WEAPON BOOST CPU","description":"Boosts rockets and lasers with raw materials currently in lab use<br \/><br \/>Only one of these items is allowed per configuration.","price":10000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_61_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"NC-AWB","item_caption":"AUTO+WEAPON+BOOST+CPU","item_prefix":"special","item_id":61,"item_cv":"f79c219f2241dea13de05fde4d700d00","price_plain":"10,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_nc-awb-x"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/nc-awb-x_100x100.png?__cv=b4df32b610682314306316c06eed2600","cost":"10,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_nc-awr-x":{"category":"special","name":"Lab CPU 2","nameShort":"AUTO ROCKET BOOST CPU","description":"Boosts rockets with raw materials currently in lab use<br \/><br \/>Only one of these items is allowed per configuration.","price":150000,"currency":"virtual","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_62_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":0,"item_name":"NC-AWR","item_caption":"AUTO+ROCKET+BOOST+CPU","item_prefix":"special","item_id":62,"item_cv":"eabeb11f3d1f36460c3ba30a81cdd300","price_plain":"150,000 C.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_nc-awr-x"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/nc-awr-x_100x100.png?__cv=dd4d95f1e348e27ba53a6edf5f0ae000","cost":"150,000 C.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_nc-awl-x":{"category":"special","name":"Lab CPU 3","nameShort":"AUTO LASER BOOST CPU","description":"Boosts lasers with raw materials currently in lab use<br \/><br \/>Only one of these items is allowed per configuration.","price":15000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_63_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"NC-AWL","item_caption":"AUTO+LASER+BOOST+CPU","item_prefix":"special","item_id":63,"item_cv":"3e9bed79a89aaf4a1489272307b59e00","price_plain":"15,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_nc-awl-x"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/nc-awl-x_100x100.png?__cv=6fdf3acc1f31b4df0c353bbcd470f400","cost":"15,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_g3x-crgo-x":{"category":"special","name":"Cargo bay expansion","nameShort":"Cargo compressor","description":"x2 cargo space thanks to molecular compression<br \/><br \/>Only one of these items is allowed per configuration.","price":10000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_71_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"GEMINEX+XI","item_caption":"Cargo+compressor","item_prefix":"special","item_id":71,"item_cv":"2245b056b4cbfe137af8f7906d28d800","price_plain":"10,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_g3x-crgo-x"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/g3x-crgo-x_100x100.png?__cv=52722009436318d043bee1373878f500","cost":"10,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_g3x-amry-s":{"category":"special","name":"Armory upgrade 1  ","nameShort":"Armory upgrade","description":"+50% armory capacity<br \/><br \/>Only one of these items is allowed per configuration.","price":5000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_72_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"GEMINEX+AC","item_caption":"Armory+upgrade","item_prefix":"special","item_id":72,"item_cv":"132cd2b447f4ea6b2bde25be153ca900","price_plain":"5,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_g3x-amry-s"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/g3x-amry-s_100x100.png?__cv=f1f5786b7dad796b927debefcad24800","cost":"5,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_g3x-amry-m":{"category":"special","name":"Armory upgrade 2  ","nameShort":"Armory upgrade","description":"+100% armory capacity<br \/><br \/>Only one of these items is allowed per configuration.","price":10000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_73_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"GEMINEX+ACC","item_caption":"Armory+upgrade","item_prefix":"special","item_id":73,"item_cv":"7a6e3fadc68d3d203ff84394921a5b00","price_plain":"10,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_g3x-amry-m"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/g3x-amry-m_100x100.png?__cv=b3287b51cb87d9da908c44fb22bc5000","cost":"10,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_g3x-amry-l":{"category":"special","name":"Armory upgrade 3","nameShort":"Armory upgrade","description":"+150% armory capacity<br \/><br \/>Only one of these items is allowed per configuration.","price":20000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_74_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"GEMINEX+AC%2B","item_caption":"Armory+upgrade","item_prefix":"special","item_id":74,"item_cv":"f9992997c698605d8dc9961985913900","price_plain":"20,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_g3x-amry-l"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/g3x-amry-l_100x100.png?__cv=70e1d6e1de75b7db34bb8859382a2600","cost":"20,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_sle-01":{"category":"special","name":"Slot CPU 1","nameShort":"SLOT EXTENDER","description":"+2 new slots for extras<br \/><br \/>Only one of these items is allowed per configuration.","price":600000,"currency":"virtual","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_81_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":0,"item_name":"SL01+CPU","item_caption":"SLOT+EXTENDER","item_prefix":"special","item_id":81,"item_cv":"d75ffbd588480b769a735dab998eeb00","price_plain":"600,000 C.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_sle-01"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/sle-01_100x100.png?__cv=99ea1c9b0f2945903e1940e185656000","cost":"600,000 C.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_sle-02":{"category":"special","name":"Slot CPU 2","nameShort":"SLOT EXTENDER","description":"+4 new slots for extras<br \/><br \/>Only one of these items is allowed per configuration.","price":75000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_82_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"SL02+CPU","item_caption":"SLOT+EXTENDER","item_prefix":"special","item_id":82,"item_cv":"e9a3634b3b7686770da05eef1c2ca800","price_plain":"75,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_sle-02"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/sle-02_100x100.png?__cv=9220f90c1874ed7d71b696d38d12e600","cost":"75,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_sle-03":{"category":"special","name":"Slot CPU 3","nameShort":"SLOT EXTENDER","description":"+6 new slots for extras<br \/><br \/>Only one of these items is allowed per configuration.","price":150000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_83_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"SL03+CPU","item_caption":"SLOT+EXTENDER","item_prefix":"special","item_id":83,"item_cv":"48bcae5d349c144b8bf60ea24e9c9c00","price_plain":"150,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_sle-03"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/sle-03_100x100.png?__cv=4676fbf3832998139092e35c0b6e8000","cost":"150,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_sle-04":{"category":"special","name":"Slot CPU 4","nameShort":"SLOT EXTENDER","description":"+10 new slots for extras<br \/><br \/>Only one of these items is allowed per configuration.","price":250000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_84_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"SL04+CPU","item_caption":"SLOT+EXTENDER","item_prefix":"special","item_id":84,"item_cv":"88c8072977929cc4f2104a1e3d551700","price_plain":"250,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_sle-04"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/sle-04_100x100.png?__cv=688a792d359998af68958acb7fbce500","cost":"250,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_dr-01":{"category":"special","name":"Drone Repair CPU 1","nameShort":"DRONE REPAIR CPU","description":"These drones automatically repair your ship when it has sustained more than 70% damage, if you have enough Uridium or credits (depending on the drone). Good for 8 repairs.<br \/><br \/>Only one of these items is allowed per configuration.","price":150000,"currency":"virtual","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_91_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":0,"item_name":"DR01+CPU","item_caption":"DRONE+REPAIR+CPU","item_prefix":"special","item_id":91,"item_cv":"5488de153fa75217f260847497a32500","price_plain":"150,000 C.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_dr-01"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/dr-01_100x100.png?__cv=ac134270b2d6c46d48ff94bfbacfa300","cost":"150,000 C.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_dr-02":{"category":"special","name":"Drone Repair CPU 2","nameShort":"DRONE REPAIR CPU","description":"These drones automatically repair your ship when it has sustained more than 70% damage, if you have enough Uridium or credits (depending on the drone). Good for 32 repairs.<br \/><br \/>Only one of these items is allowed per configuration.","price":15000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_92_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"DR02+CPU","item_caption":"DRONE+REPAIR+CPU","item_prefix":"special","item_id":92,"item_cv":"17e328f52acd887f0900d6cd47c81000","price_plain":"15,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_dr-02"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/dr-02_100x100.png?__cv=2cd2ee99cfa7e803424786d9db551900","cost":"15,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_rd-x":{"category":"special","name":"Radar CPU","nameShort":"RADAR CPU","description":"Displays diplomacy status on mini map<br \/><br \/>Only one of these items is allowed per configuration.","price":15000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_101_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"RD+CPU","item_caption":"RADAR+CPU","item_prefix":"special","item_id":101,"item_cv":"7698df57e88dd294bd12e2a5d3653c00","price_plain":"15,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_rd-x"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/rd-x_100x100.png?__cv=597c2f3075c6a0453bae7dd1902dda00","cost":"15,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_jp-01":{"category":"special","name":"Jump CPU 1","nameShort":"GALAXY JUMP CPU","description":"10 jumps to X-1 home map. You may not jump from farther out than map X-4 and NOT from PvP maps (4-X). May not be used during battle.<br \/><br \/>Only one of these items is allowed per configuration.","price":150000,"currency":"virtual","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_111_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":0,"item_name":"JP01+CPU","item_caption":"GALAXY+JUMP+CPU","item_prefix":"special","item_id":111,"item_cv":"0e205ea36f47f32d40c202d0b49ada00","price_plain":"150,000 C.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_jp-01"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/jp-01_100x100.png?__cv=5632c2889dd72df6178de4f1f579e100","cost":"150,000 C.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_jp-02":{"category":"special","name":"Jump CPU 2","nameShort":"GALAXY JUMP CPU","description":"Jump to X-1 home map, works everywhere except the pirate sector. 20 total jumps. May not be used during battle.<br \/><br \/>Only one of these items is allowed per configuration.","price":15000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_112_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"JP02+CPU","item_caption":"GALAXY+JUMP+CPU","item_prefix":"special","item_id":112,"item_cv":"2c1ee727e6e82de0c57042cf5b743b00","price_plain":"15,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_jp-02"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/jp-02_100x100.png?__cv=4c714d0033db967ba3a2720032ae8800","cost":"15,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_fb-x":{"category":"special","name":"Automatic CPU Fuel Assistant","nameShort":"AUTOMATIC FUEL ASSISTANT","description":"Automatically buys 10,000 units of P.E.T. fuel when your fuel reserves fall below 1000 units.<br \/><br \/>Only one of these items is allowed per configuration.","price":5000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_123_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"FB-X-CPU","item_caption":"AUTOMATIC+FUEL+ASSISTANT","item_prefix":"special","item_id":123,"item_cv":"51455d7c8dbc25a20ecfc9837c84d600","price_plain":"5,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_fb-x"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/fb-x_100x100.png?__cv=e06d39c29ea36fb5e9327bd606e95200","cost":"5,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_alb-x":{"category":"special","name":"Ammunition CPU","nameShort":"AMMO BUY ASSISTANT","description":"Automatically buys 10,000 laser rounds if less than 1,000 rounds on board. Settings can be adjusted in Equipment.<br \/><br \/>Only one of these items is allowed per configuration.","price":15000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_121_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"AM+CPU","item_caption":"AMMO+BUY+ASSISTANT","item_prefix":"special","item_id":121,"item_cv":"ffaea294d4d8f756be7477fde1534200","price_plain":"15,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_alb-x"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/alb-x_100x100.png?__cv=21e336721d12e791fb7e7c6414d86300","cost":"15,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_rb-x":{"category":"special","name":"Rocket CPU","nameShort":"ROCKET BUY ASSISTANT","description":"Automatically buys 500 rockets of the selected rocket type when you have less than 100 left on board. To set the rocket type, click on Hangar -> Equipment.<br \/><br \/>Only one of these items is allowed per configuration.","price":15000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_122_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"RB+CPU","item_caption":"ROCKET+BUY+ASSISTANT","item_prefix":"special","item_id":122,"item_cv":"4af910b4a0f71bf7f329380f8815be00","price_plain":"15,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_rb-x"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/rb-x_100x100.png?__cv=0a0c408176a8fa5c7dd6f6a004164a00","cost":"15,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_smb-01":{"category":"special","name":"Smart Bomb CPU","nameShort":"SMART BOMB CREATOR","description":"Instant bomb made from 10 mines and 100 Xenomit; doesn't cause any damage to your ship<br \/><br \/>It has the same cool-down time as mines.<br \/><br \/>Only one of these items is allowed per configuration.","price":50000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_131_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"SMB01+CPU","item_caption":"SMART+BOMB+CREATOR","item_prefix":"special","item_id":131,"item_cv":"5a918fcec7c5e188257334fc74814b00","price_plain":"50,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_smb-01"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/smb-01_100x100.png?__cv=ad7e7ff45f564293dcac06b878e57b00","cost":"50,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_ish-01":{"category":"special","name":"Insta-shield CPU","nameShort":"ADVANCED SHIELD","description":"3-second protection against enemies; 10 mines and 100 Xenomit used every time<br \/><br \/>It has the same cool-down time as mines.<br \/><br \/>Only one of these items is allowed per configuration.","price":50000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_141_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"ISH01+CPU","item_caption":"ADVANCED+SHIELD","item_prefix":"special","item_id":141,"item_cv":"a4715d59f75d07458815b223eabaa500","price_plain":"50,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_ish-01"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/ish-01_100x100.png?__cv=ba929c263af782b8fb64046ee2b94d00","cost":"50,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_nc-agb-x":{"category":"special","name":"Generator Boost CPU","nameShort":"GENERATOR BOOST","description":"Automatically gives your generators a boost using the best resources available<br \/><br \/>Only one of these items is allowed per configuration.","price":15000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_151_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"NC-AGB+CPU","item_caption":"GENERATOR+BOOST","item_prefix":"special","item_id":151,"item_cv":"493949647bd0087c6ba6064f185cc300","price_plain":"15,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_nc-agb-x"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/nc-agb-x_100x100.png?__cv=0a6203985f4baacdba419e68daef9700","cost":"15,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_aim-01":{"category":"special","name":"Targeting Guidance CPU 1","nameShort":"Targeting guidance CPU 1","description":"25% less chance that lasers will miss their target; 10 Xenomit used per volley <br \/><br \/>Click on the CPUs button in the shortcut bar to activate targeting guidance. Only one targeting guidance CPU is allowed per configuration.<br \/><br \/>Only one of these items is allowed per configuration.","price":20000000,"currency":"virtual","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_161_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":0,"item_name":"AIM01+CPU","item_caption":"Targeting+guidance+CPU+1","item_prefix":"special","item_id":161,"item_cv":"88f6c7cc00376e9a096ce15415403900","price_plain":"20,000,000 C.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_aim-01"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/aim-01_100x100.png?__cv=9b5cb30e69d3871b077b2c9a16138600","cost":"20,000,000 C.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_aim-02":{"category":"special","name":"Targeting Guidance CPU 2","nameShort":"TARGETING GUIDANCE CPU 2","description":"50% less chance that lasers will miss their target; 10 Xenomit used per volley<br \/><br \/>Click on the CPUs button in the shortcut bar to activate targeting guidance. Only one targeting guidance CPU allowed per configuration.<br \/><br \/>Only one of these items is allowed per configuration.","price":200000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_162_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"AIM02+CPU","item_caption":"TARGETING+GUIDANCE+CPU+2","item_prefix":"special","item_id":162,"item_cv":"6e7702deafabf1f54d443eeab38d8f00","price_plain":"200,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_aim-02"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/aim-02_100x100.png?__cv=b8d5a02cf8bd3f5080007615048d0d00","cost":"200,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_cpu_rllb-x":{"category":"special","name":"Rocket-launcher CPU","nameShort":"ROCKET-LAUNCHER CPU","description":"The rocket-launcher CPU automatically reloads your rocket launcher with a specified rocket type to rain fire on your enemies when you launch a laser attack.<br \/><br \/>After installation is completed, the RL-LB1 CPU must be activated on the space map in \"CPUs\". <br \/><br \/>Only one of these items is allowed per configuration.","price":25000,"currency":"real","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_182_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"RL-LB1+CPU","item_caption":"ROCKET-LAUNCHER+CPU","item_prefix":"special","item_id":182,"item_cv":"5dff9a76cf05119ab20768cfa68c1000","price_plain":"25,000 U.","event_item_enabled":0,"loot_id":"equipment_extra_cpu_rllb-x"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/cpu\/rllb-x_100x100.png?__cv=c02ef79c7fb09afb18efa7bacb68e300","cost":"25,000 U.","isAmountSetable":true,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":false},"equipment_extra_hmd-07":{"category":"special","name":"HM7 trade drone","nameShort":"HM7 trade drone","description":"With the HM7 trade drone, you can sell your ore no matter what orbit you're in. Why waste time going back to the space station?<br \/>Valid for 100 transactions.<br \/><br \/><br \/><br \/>Only one of these items is allowed per configuration.","price":0,"currency":"virtual","nameBackgroundImageUrl":"\/do_img\/global\/text_tf.esg?l=us&s=12&t=special_190_code&f=eurostyle_thea&color=white&bgcolor=grey","flash":{"parameters":{"src":"\/swf_global\/shopdetails.swf","version":[10,0],"id":"shopdetails","width":"253","height":"206","wmode":"transparent","bgColor":"schwarz","allowScriptAccess":"always"},"variables":{"cdn":"http:\/\/darkorbit-22.ah.bpcdn.net\/","elite_icon_cv":"4738d9ac735bc66ddb9d288a3d982e00","background_cv":"5a3549d51b64b3301a596e7197760500","limited_icon_cv":"74e9a59f2ccf5e2a3a69ebead990c200","limited_std_icon_cv":"506294ad55b3114581a227681644e200","elite":1,"item_name":"HM7","item_caption":"HM7+trade+drone","item_prefix":"special","item_id":190,"item_cv":"e85eaa336e858812dfc6cdbf4b3a6a00","price_plain":"Payment","event_item_enabled":0,"loot_id":"equipment_extra_hmd-07"}},"itemListImageUrl":"\/do_img\/global\/items\/equipment\/extra\/hmd-07_100x100.png?__cv=13dee6dcb1f39fc812db55e2db0ec800","cost":"Payment","isAmountSetable":false,"amountsSelectable":["five","twenty","max"],"maxAmount":200,"isConsumingCargoSpace":false,"isActiveEventItem":false,"requiresShipInActiveHangar":false,"discountPercent":null,"discountTooltipText":null,"isPaymentItem":true,"paymentUrl":"\/?action=internalPaymentProxy&req=c83e7b4fbca6cb3f8082ab8b0f7ede65f34768bfe90e31b52c2a0f3a5c3594e995ba32f5e2a5ed62f74082b1788aa788b3c9c558bd489149787ef07750aa8fb7d99ec0db9c48efa629ec0e47159bcd3d6965c1e6794dd209&v=22f322e37d946914"}},
        numItems        : 41,
        startupItemId   : 'resource_logfile',
        userDroneAmount : 0,
        maxDroneAmount  : 8,
        language        : 'us'
    };

    User.Parameters = {"balance":{"uridium":25,"credits":120000},"discountFactor":1,"language":"us","ship":{"laserAmmunitionSpace":0,"rocketSpace":253},"isActiveHangarEmpty":false,"isShipDumpEmpty":true};

    Tools.Text.Parameters = {
        resources       : {"items_shop_buy_confirm_s":"Do you really want to buy <b>%ITEMNAME%<\/b> for <b>%ITEMPRICE%<\/b>?","items_shop_buy_confirm_p":"Do you really want to buy %AMOUNT%x of <b>%ITEMNAME%<\/b> for <b>%ITEMPRICE%<\/b>?","items_shop_abo_confirm":"Do you really want to subscribe to <b>%itemName%<\/b>?","booster_subscription_cancel_confirmation":"Do you really want to end your \"%BOOSTERNAME%\" subscription?","drone_have_max":"Too many drones; you can't buy any more.","thousands_separator":",","decimal_separator":".","pricetag_credits_compact":"%VALUE% C.","pricetag_uridium_compact":"%VALUE% U.","items_currency_realcurrency_credits":"Credits","items_booster_subscription_cancel_confirmation":"Do you really want to end your \"%BOOSTERNAME%\" booster subscription?","booster_subscription_running":"Booster subscription active","booster_countdown":"Remaining time: %DAYS% days %HOURS% hours %MINUTES% min.","error_pet_name_char":"Invalid characters used in the P.E.T. name. Please only use letters and digits.","error_pet_name_length":"The P.E.T. name must be between 1 and 24 characters long.","shop_itemNameWithLevel":"%ITEMNAME% (Level: %LEVEL%)","shop_techfactory_long":"You may construct the item in the tech factory.","shop_techfactory":"Tech Factory","tf_message_not_enough_uridium":"Not enough Uridium available","tf_message_not_enough_credits":"Not enough credits available","buy_toManyBATTERY":"You already have the max. amount of laser ammo on board!","buy_toManyROCKET":"You already have the max. number of rockets on board!","pet_gear_requirement":"Required: P.E.T. Level %level%","current_in_use":"In use","buy_pet_invalidFuelAmount":"Your P.E.T. cannot hold that much fuel.","active_hangar_empty":"Purchase unsuccessful.<br>The hangar that is currently activated is empty.","active_hangar_empty_equip":"You must first place a ship in the hangar.","active_hangar_empty_buy":"You must first acquire a ship and then place it in this hangar. ","hint_go_to_payment":"Need more Uridium? Click here to add some more Uridium!"}
    };

    Tools.Popup.Parameters = {"showOnLoad":false,"type":"success","content":""};

    if('') {
        jQuery("#discount").qtip({
            content: '',
            style:'dohdr',
            width: 50,
            position:{target:'mouse'}
        });
    }


</script>
