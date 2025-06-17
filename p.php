<?php
 
    if(isset($_POST['password'])){
        $password = $_POST['password'];
        if($password=="888"){
            setcookie("abcdefg" ,"gzhd2019", time()+3600*24);
            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
            header("Location: {$url}"); 
        }
        echo ' <script>alert("密码错误") </script><form method="post"> 请输入密码：<input type="password" name="password"><input type="submit"></form>  ';
        exit();
    }
    if(!isset( $_COOKIE["abcdefg"])){  
        echo '<form method="post"> 请输入密码：<input type="password" name="password"><input type="submit"></form> ';
        exit();
    }

?>
<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="facebook-domain-verification" content="" />
	<title>專業減肥調理方案</title>
	<!-- <script type="text/javascript">
		document.writeln("<script src='js/60ae06d994804.js" + Math.random() + "'><\/script>")
	</script> -->

	<link rel="stylesheet" href="./style/font_2071438_314wjj1ik64.css">
	<noscript><img height="1" width="1" style="display:none"
			src="./style/282f4d073d004cb2b2b58b9f2d419445.gif" /></noscript>
	<!-- End Facebook Pixel Code -->
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		ul {
			list-style: none;
		}

		body,
		html {
			padding: 0;
			margin: 0;
		}

		.warp {
			margin: 0 auto;
			max-width: 640px;
		}

		.content-img {
			width: 100%;
		}

		.chuiniu {
			overflow: hidden;
			width: 80%;
			margin-left: 10%;
			line-height: 50px;
			font-size: 16px;
			box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.15);
			border-radius: 25px;
			margin-top: 1em;
			margin-bottom: 2em;
			text-align: center;
			position: relative;
		}

		.chuiniu svg {
			width: 20px;
			height: 20px;
			padding: 0 6px;
			vertical-align: middle;
		}

		.form {
			padding: 0 20px;
			box-sizing: border-box;
			line-height: 2em;
		}

		.form .q-item {
			margin-bottom: 1em;
			color: #777;
		}

		.form .q-item .answer {
			color: #333;
		}

		.form .q-item input[type="text"] {
			outline: none;
			border: none;
			border-bottom: 1px solid rgb(220, 220, 220);
			padding: 6px;
			width: 80%;
		}

		.form .q-item .answer span {
			display: inline-block;
			width: 50%;
			margin-right: -1em;
			color: #555;
			font-size: 0.9em;
		}

		.form .q-item .question span {
			font-size: 0.8em;
		}

		.submit {
			line-height: 50px;
			font-size: 20px;
			color: #fff;
			border-radius: 25px;
			width: 80%;
			margin: 1em 0;
			margin-left: 10%;
			background: #ef8093;
			text-align: center;
		}

		.baoming {
			box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.15);
			width: 280px;
			margin: 0 auto;
			text-align: center;
			font-size: 14px;
			line-height: 40px;
			height: 198px;
			overflow: hidden;
			color: rgb(51, 51, 51);
		}

		.footer-nav {
			width: 100%;
			max-width: 640px;
			background: #ef8093;
			line-height: 60px;
			font-size: 20px;
			color: #fff;
			text-align: center;
			position: fixed;
			bottom: 0;
		}

		.icon {
			width: 1em;
			height: 1em;
		}

		.scroller p {
			margin: 0;
		}

		.scroller {
			position: relative;
			transition: bottom 300ms;
			margin: 0;
		}

		.active {
			visibility: visible;
		}

		.normal {
			visibility: hidden;
		}

		.photo_img {
			position: relative;
		}

		.luck_draw {
			position: absolute;
			left: 7%;
			bottom: 21.5%;
			width: 64px;
			transition: width 0.5s;
		}

		@media (min-width: 400px) and (max-width: 450px) {
			.luck_draw {
				width: 71px;
			}
		}

		@media (min-width: 451px) and (max-width: 500px) {
			.luck_draw {
				width: 76px;
			}
		}

		@media (min-width: 501px) and (max-width: 525px) {
			.luck_draw {
				width: 81px;
			}
		}

		@media (min-width: 526px) and (max-width: 550px) {
			.luck_draw {
				width: 86px;
			}
		}

		@media (min-width: 551px) and (max-width: 575px) {
			.luck_draw {
				width: 91px;
			}
		}

		@media (min-width: 576px) and (max-width: 600px) {
			.luck_draw {
				width: 96px;
			}
		}

		@media (min-width: 601px) and (max-width: 625px) {
			.luck_draw {
				width: 101px;
			}
		}

		@media (min-width: 626px) {
			.luck_draw {
				width: 106px;
			}
		}
	</style>

              
                </head>
                

<body>
	<div class="warp">
		<div class="photo_img">
			<img src="./style/20210307172312_01.gif" class="content-img" style="margin: 0; padding: 0; display: block;" />
			<img src="./style/20210307172312_02.gif" class="content-img" style="margin: 0; padding: 0; display: block;" />
			<img src="./style/20210307172312_03.jpg" class="content-img" style="margin: 0; padding: 0; display: block;" />
		</div>
		<div class="chuiniu">
			<svg class="icon svelte-12xg9tt" viewBox="0 0 22 20" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M16.106 13.214c-.342-.396-.334-.856.005-1.216.59-.626.915-1.448.915-2.32 0-.875-.328-1.7-.92-2.326a.93.93 0 0 1 .014-1.283c.349-.35.827-.119.95.014a5.194 5.194 0 0 1 1.421 3.595 5.202 5.202 0 0 1-1.412 3.585c-.172.184-.771.184-.973-.049zm-2.604 6.146c-.19 0-.379-.047-.553-.142L4.403 14.52H1.174C.525 14.52 0 13.976 0 13.31V6.05c0-.669.525-1.21 1.174-1.21h3.229L12.949.142c.365-.199.803-.19 1.158.03.353.218.569.613.569 1.038v16.94c0 .425-.216.82-.569 1.037a1.172 1.172 0 0 1-.605.173zM1.324 13.08h3.372c.193 0 .383.05.553.143l8.09 4.547V1.576L5.248 6.09c-.17.095-.36.142-.553.142H1.324v6.849zm2.838-7.456h1.236v8.408H4.162V5.624zm13.299 11.254c-.298-.394-.097-.974.286-1.283a7.52 7.52 0 0 0 1.702-1.925 7.669 7.669 0 0 0 1.13-4.03c0-2.319-1.016-4.476-2.784-5.917-.38-.311-.489-.873-.188-1.265.226-.234.787-.207.963-.067C20.743 4.431 22 6.805 22 9.681c0 2.906-1.28 5.598-3.51 7.386-.257.206-.86.072-1.029-.19z"
					fill="#ef8093" fill-rule="nonzero"></path>
			</svg>
			<span class="number-active number-midd" id="numberline">
				目前已有<span style="font-size: 1.2em; color: #ef8093;" id="number">13002</span>人領取調理方案
			</span>
		</div>
		<div class="form">
			<div class="q-item">
				<div class="question">你的年齡？(保密) <span>(單選)</span></div>
				<div class="answer">
					<label>
						<span> <input type="radio" name="age" />30歲以下 </span>
					</label>
					<label>
						<span> <input type="radio" name="age" />30歲-40歲 </span></label>
					<label>
						<span> <input type="radio" name="age" />41-50歲 </span></label>
					<label>
						<span> <input type="radio" name="age" />50歲以上</span></label>
				</div>
			</div>

			<div class="q-item">
				<div class="question">你是突然胖起來的嗎？ <span>(單選)</span></div>
				<div class="answer">
					<label><span class="">
							<label><input type="radio" name="time" />是</label></span></label>
					<label><span> <input type="radio" name="time" />不是</span></label>
				</div>
			</div>

			<div class="q-item">
				<div class="question">你覺得你身上哪個位置胖了？<span>(單選)</span></div>
				<div class="answer">
					<label><span class="">
							<label><input type="radio" name="time1" />腹部</label></span></label>
					<label><span> <input type="radio" name="time1" />四肢</span></label>
					<label><span> <input type="radio" name="time1" />全身都胖</span></label>
				</div>
			</div>
			<div class="q-item">
				<div class="question">你每週運動嗎？ <span>(單選)</span></div>
				<div class="answer">
					<label><span class="">
							<label><input type="radio" name="time2" />經常運動</label></span></label>
					<label><span> <input type="radio" name="time2" />偶爾運動</span></label>
					<label><span> <input type="radio" name="time2" />從來不運動</span></label>
				</div>
			</div>
			<div class="q-item">
				<div class="question">你每天都吃蔬菜和水果嗎？<span>(單選)</span></div>
				<div class="answer">
					<label><span class="">
							<label><input type="radio" name="time5" />大量吃</label></span></label>
					<label><span> <input type="radio" name="time5" />有時候吃，有時候不吃</span></label>
				</div>
			</div>
			<div class="q-item">
				<div class="question">你想減肥的目標？<span>(單選)</span></div>
				<div class="answer">
					<label><span class="">
							<label><input type="radio" name="time6" />10KG以下</label></span></label>
					<label><span> <input type="radio" name="time6" />15KG</span></label>
					<label><span> <input type="radio" name="time6" />20KG</span></label>
					<label><span> <input type="radio" name="time6" />25KG以上</span></label>
				</div>
			</div>
			<div class="q-item">
				<div class="question">你嘗試過哪種減肥方案？<span>(單選)</span></div>
				<div class="answer">
					<label><span class="">
							<label><input type="radio" name="time7" />運動減肥</label></span></label>
					<label><span> <input type="radio" name="time7" />節食或代餐減肥</span></label>
					<label><span> <input type="radio" name="time7" />醫美減肥</span></label>
					<label><span> <input type="radio" name="time7" />藥品減肥</span></label>
					<label><span> <input type="radio" name="time7" />嘗試過2種以上</span></label>
					<label><span> <input type="radio" name="time7" />以上都沒有</span></label>
				</div>
			</div>
			<div class="q-item" style="text-align: center;">
				<strong>添加LINE【<span name="notweixin" style="color: #ef8093;">
						<span class="wuk_weixin"></span>
					</span>】即可獲取<br />
					你自己的專屬方案</strong><br />
			</div>
		</div>
		<a href="javascript:showline()" style="text-decoration: none;">
			<div class="submit">立即領取一對一專屬方案</div>
		</a>
		<p style="font-size: 16px; font-weight: bold; text-align: center;">
			最新報名客戶
		</p>

		<div class="baoming">
			<div class="scroller" style="bottom: 200px; transition: bottom 300ms ease 0s;">
				<p><span class="MMC">凌**</span>  已添加獲取  10分鐘前</p>
				<p><span class="MMC">朱**</span>  已添加獲取  11分鐘前</p>
				<p><span class="MMC">武**</span>  已添加獲取  12分鐘前</p>
				<p><span class="MMC">周**</span>  已添加獲取  14分鐘前</p>
				<p><span class="MMC">張**</span>  已添加獲取  22分鐘前</p>
				<p><span class="MMC">王**</span>  已添加獲取  22分鐘前</p>
				<p><span class="MMC">陳**</span>  已添加獲取  24分鐘前</p>
				<p><span class="MMC">崔**</span>  已添加獲取  33分鐘前</p>
				<p><span class="MMC">任**</span>  已添加獲取  44分鐘前</p>
				<p><span class="MMC">凌**</span>  已添加獲取  10分鐘前</p>
				<p><span class="MMC">朱**</span>  已添加獲取  11分鐘前</p>
				<p><span class="MMC">武**</span>  已添加獲取  12分鐘前</p>
				<p><span class="MMC">周**</span>  已添加獲取  14分鐘前</p>
				<p><span class="MMC">張**</span>  已添加獲取  22分鐘前</p>
			</div>
		</div>

		<div class="mm-comment" id="comment_box" style="display: block;">
			<link rel="stylesheet" href="./style/new_style.css">
			<!--<div class="m-commentForm" style="display:block;">
							<div class="m-commentFormMain">
									<div class="m-commentFormHead">發表評論</div>
									<div class="m-commentFormBody">
											<form action="#" tppabs="#" class="m-form">
													<div class="f-field"><textarea name="content" class="m-commentInput" placeholder="請輸入評論內容" rows="6"></textarea></div>
													<div class="f-field f-fieldBtn"><input type="hidden" name="type_id" value="fec8ca9882dde89e41abfd6ff202ee54"><button type="button" class="f-cancelBtn">取消</button><button type="submit" class="f-submitBtn">確認評論</button></div>
											</form>
									</div>
							</div>
					</div>-->
			<div class="m-commentResult">
				<div class="m-commentResultHead">精彩評論</div>
				<ul class="m-conmentList">
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t1.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">劉雅佳 </span><span
								class="m-discussAddress">臺北市</span></div>
						<div class="m-discussContent">不會反彈嗎，很怕一停掉就胖回去，等下做無用功.....</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">7</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>8535</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t2.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">吳玉涵</span><span
								class="m-discussAddress">桃園市</span></div>
						<div class="m-discussContent">
							想告訴樓上的，真的不反彈，我都停好幾個月了，體重都還是一樣也都沒有變胖回去耶，所以可以放心試啦<br><img src="./style/f1.png"
								style="width: 100%;height: 100%;" alt=""></div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">7</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>5944</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t3.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">林嘉茹</span><span
								class="m-discussAddress">花蓮市</span></div>
						<div class="m-discussContent">
							男的也可以減嗎？想給我老公也減減肥，他太胖了，睡覺被他壓到都快喘不過氣了<br>
						</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">5</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>2386</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t4.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">方傑凱</span><span
								class="m-discussAddress">南雄市</span></div>
						<div class="m-discussContent">
							可以啊，樓上的，我就是男的啊，找老師減掉了我的啤酒肚，效果不錯，可以讓你老公試試<br><img src="./style/f2.png"
								style="width: 100%;height: 100%;" alt="">
						</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">5</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>3542</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t5.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">黃雅淑</span><span
								class="m-discussAddress">臺北市</span></div>
						<div class="m-discussContent">
							感覺減肥效果很好耶，我也想去試試看</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">5</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>2356</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t6.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">吳珮麗 </span><span
								class="m-discussAddress">臺中市</span></div>
						<div class="m-discussContent">
							以前很胖的時候穿衣服都沒有什麼選擇的，因為太胖了怎麼穿都不好看，現在瘦下來之後可以盡情的穿想穿的衣服，也不用挑最大號的去買，這種感覺真的太好了，所以姐妹們都趕緊找老師減肥瘦下來體驗這種更美好的生活吧，Line：<span
								name="notweixin" style="color: red;"></span><br><img src="./style/f3.png"
								style="width: 100%;height: 100%;" alt="">
						</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">5</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>1548</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t7.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">吳宜君 </span><span
								class="m-discussAddress">臺南市</span></div>
						<div class="m-discussContent">
							我也要去加老師，因為我也想體驗樓上說的那種生活啊啊啊！！太胖了，真的好多好看的衣服都與我無緣......</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">5</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>2387</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t8.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">陳惠宜</span><span
								class="m-discussAddress">臺東縣</span></div>
						<div class="m-discussContent">
							我生完肚子都還跟懷孕四五個月的一樣....很大.....幸好朋友給我推薦了老師，在老師的幫助下才減掉了我的肚子肉，真的很感謝老師<br><img
								src="./style/f4.png" style="width: 100%;height: 100%;" alt=""></div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">5</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>1568</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t9.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">方宜宜 </span><span
								class="m-discussAddress">花蓮市</span></div>
						<div class="m-discussContent">運動節食那些我就真的是堅持不來，這個真的這麼方便就能瘦嗎
						</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">4</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>6541</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t10.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">李盈琳</span><span
								class="m-discussAddress">臺中市</span></div>
						<div class="m-discussContent">
							我是先天性的肥胖，從小胖到大，所以一直都只能穿寬鬆的衣服從來不敢穿裙子，很自卑...但是幸運的是我遇到了老師成功瘦下來了，第一次對自己有自信也敢穿一直不敢穿的裙子，真的心滿意足了~~<br><img
								src="./style/f5.png" style="width: 100%;height: 100%;" alt=""></div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">4</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>5952</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t11.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">劉嘉穎 </span><span
								class="m-discussAddress">臺南市</span></div>
						<div class="m-discussContent">
							這個老師我加蠻久了欸，因為朋友當時老是在我耳邊說這種是假的、沒效之類的話，導致我當時就沒有找老師，現在真的是想哭，不說了，我要快點找老師去了QQ
						</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">4</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>5684</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t12.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">王青玲 </span><span
								class="m-discussAddress">新竹市</span></div>
						<div class="m-discussContent">真的假的？也沒有副作用？</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">4</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>2654</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t13.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">黃佩昱 </span><span
								class="m-discussAddress">臺北市</span></div>
						<div class="m-discussContent">
							剛剛找老師諮詢完，老師超專業的，各種肥胖問題也都能解決，難怪會有這麼多人都能減肥成功，所以一跟老師聊完我就決定減肥了，希望我也能快點瘦下來</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">4</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>1568</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t14.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname"> 謝雯鈺 </span><span
								class="m-discussAddress">南雄市</span></div>
						<div class="m-discussContent">
							我從66公斤減到現在47公斤，因為我身體本身是有點小疾病的，所以後面喝完我也有去醫院做檢查，不過醫生說沒有影響到，其他方面也沒有問題，所以老師這個還是挺安全的了，沒有什麼副作用
						</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">4</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>8564</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t15.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">黃瑞妍</span><span class="m-discussAddress">臺北市
							</span></div>
						<div class="m-discussContent">
							我想跟大家說，想變美真的只要減肥就夠了，以前太胖個個叫我肥豬，現在瘦下來之後，稍微打扮一下整個人都變好看很多，個個反而都誇我氣質美女之類的，所以減肥真的太重要啦，大家都快點減肥變瘦瘦瘦啊~~line：<span
								name="notweixin"></span><br><img src="./style/f6.png"
								style="width: 100%;height: 100%;" alt=""></div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">3</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>5685</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t16.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">林靜雯 </span><span
								class="m-discussAddress">新竹市</span></div>
						<div class="m-discussContent">
							之前就有聽我朋友她妹妹講過楚琳老師，因為是老師幫她減肥成功的，但是那個時候我不用減肥所以也就沒有找她妹妹要line，剛好現在在這裡看到了有在發老師的line出來，所以馬上加上了，真的很感謝發出來的姐妹
						</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">3</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>5984</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t17.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">陳珊儀 </span><span
								class="m-discussAddress">新北市</span></div>
						<div class="m-discussContent">
							我162，已經76公斤了，還,減得下來嗎</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">2</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>3568</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t18.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">方盈盈 </span><span
								class="m-discussAddress">基隆市</span></div>
						<div class="m-discussContent">給你們看看我瘦了多少，以前的褲子現在穿著都很大，所以可想而知我真的瘦了超多的，老師太厲害了，效果很贊<br><img
								src="./style/f7.png" style="width: 100%;height: 100%;" alt=""></div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">2</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>1954</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t19.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">陳藝彤 </span><span
								class="m-discussAddress">新北市</span></div>
						<div class="m-discussContent">
							我媽媽就是太胖了，醫生說她年紀也大了，太胖會影響她的身體健康，所以建議她減肥，就剛好看到老師這個，就是不知道安不安全，安全的話才敢給我媽媽試試</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">2</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>1654</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t20.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">張君婉 </span><span
								class="m-discussAddress">嘉義市</span></div>
						<div class="m-discussContent">
							你們加了都有回覆了嗎，我加了還沒回，好著急喔，很想快點得到老師的減肥方案啊！</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">1</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>1425</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t21.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">吳心淑</span><span class="m-discussAddress">
								臺中市</span></div>
						<div class="m-discussContent">我加的回了，不過也是隔了一會的，估計太多人找老師了，你再等等應該就會回你了</div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">1</span>天前</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>1357</span>
							</div>
						</div>
					</li>
					<li class="m-discuss">
						<div class="m-discussThumbnail"><img src="./style/t22.png" alt="">
						</div>
						<div class="m-discussHead"><span class="m-discussNickname">黃麗巧</span><span
								class="m-discussAddress">桃園市</span></div>
						<div class="m-discussContent">
							當初是朋友推薦了老師給我的，說是方法比較簡單，我帶孩子也能減，所以才找老師減肥了，沒想到方法這麼簡單，效果都能這麼好，幸好當時朋友把老師推薦給我，不然像我這種一直要帶小孩的根本沒辦法減啊<br><img
								src="./style/f8.png" style="width: 100%;height: 100%;" alt=""></div>
						<div class="m-discussFoot">
							<div class="m-discussTime"><span class="m-time">1</span>天前
							</div>
							<div class="m-discussPraise"><span class="iconfont icon-icon_dianzan-xian"></span><span>1277</span>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!--<div class="m-sendComment"><span class="m-s-btn">發表評論</span></div>-->
		</div>


		<br />
		<br />
		<br />
		<br />
 <style>
			.bb{
				animation: bb linear 1s infinite;
			}
			@keyframes bb{
				0%{
					transform: scale(1);
				}
				50%{
					transform: scale(0.8);
				}
				100%{
					transform: scale(1);
				}
			}
		</style>
  <style>
  .footer {
	position: fixed;
	bottom: 0;
	max-width: 640px;
	width: 100%;
	background: #fed6d7;
	margin:auto;
	z-index:999;
}
.footer .txt {
	background: #FED6D7;
	padding: 0.5rem 0;
	margin: 0 10px;
	/* border-left: 2px solid #000; */
	/* border-right: 2px solid #000; */
	/* border-top: 2px solid #000; */

	display: flex;
	justify-content: center;
	align-items: center;
}
.bb {
	animation: bb linear 1s infinite;
}
.txt img {
	border: 0 none;
	height: auto;
	max-width: 100%;
	vertical-align: top;
}
  </style>
	<div class="footer">
			<div class="txt">
				<div style="display: flex;justify-content: center;align-items: center;">
					<img src="./style/sq.png" class="bb" onclick="showline()" alt="" style="width: 80%;height: auto;border-radius: 16px;">
				</div>
			</div>
		</div>
		<script>
			// function addNumber() {
			// 	var n = 13000;
			// 	setInterval(function () {
			// 		n = n + Math.ceil(Math.random() * 3);
			// 		var number = document.querySelector("#number");

			// 		var numberline = document.querySelector("#numberline");
			// 		numberline.className = "number-active number-top";
			// 		setTimeout(function () {
			// 			numberline.className = "number-bottom";
			// 		}, 400);
			// 		setTimeout(function () {
			// 			number.innerText = n;
			// 			numberline.className = "number-active number-midd";
			// 		}, 416);
			// 	}, 6000);
			// }
			// addNumber();
		</script>
		<script>
			var scroller = document.querySelector(".scroller");
			var h = parseInt(getComputedStyle(scroller).height.replace("px", ""));
			setInterval(function () {
				var i = scroller;
				var offsetY = i.style.bottom.replace("px", "") || 0;
				offsetY = parseInt(offsetY) + 40;
				i.style.bottom = offsetY + "px";
				if (offsetY > h - 200) {
					offsetY = 0;
					i.style.transition = "bottom 0s";
					i.style.bottom = offsetY + "px";
					setTimeout(
						function (offsetY, i) {
							i.style.transition = "bottom 300ms";
							offsetY = parseInt(offsetY) + 40;
							i.style.bottom = offsetY + "px";
						},
						16,
						offsetY,
						i
					);
				}
			}, 3000);
		</script>
	</div>
	<script>
		// function showline() {
		// 	cli_copy('跳转LINE');
		// 	window.setTimeout(function () {
		// 		window.location = strtel
		// 	}, 500)
		// }
	</script>
	<script>
		// function wksend_api() {
		// 	fbq('track', 'Purchase', {
		// 		value: 1,
		// 		currency: 'USD'
		// 	});
		// }

		// 点赞
		// 名字
		N()
		setInterval(N, 10000)

		function N() {
			let newArr =
				"曹璇*,鍾婉*,孫雪*,張輝*,柯君*,梁宜*,費君*,邱茹*,夏涵*,高琳*,徐維*,蘇輝*,邱淑*,羅含*,方儀*,劉欣*,邱娟*,夏佩*,高莉*,柯羽*,費霜*,白佩*,黃佩*,何雅*,陳琳*,劉瓔*,馬霜*,夏琳*,洪音*,劉娟*,鄧伊*,劉文*,葉芊*,吳佳*,汪蘭*,羅茹*,朱鈺*,盧芬*,唐伊*,汪心*,錢伊*,何欣*,簡美*,高妍*,葉佳*,錢嘉*,謝穎*,陳嫣*,洪巧*,姜琦*,唐靜*,夏慧*,劉儀*,朱茹*,韓玲*,孫娟*,夏婉*,柯涵*,柯琳*,莊佳*,馬心*,柯珊*,費音*,曹含*,姜美*,姚羽*,邱玲*,簡霜*,曹慧*,孫巧*,謝佳*,李霜*,鄧雪*,顏瓔*,姜伊*,汪怡*,周雅*,朱含*,鍾巧*,張雪*,邱琳*,蘇怡*,顏璇*,鄭璇*,葉菲*,鄭珊*,蔡樺*,姚嫣*,錢佳*,彭慧*,夏蘭*,范嫣*,彭心*,唐佩*,方藝*,汪璟*,盧雯*,許依*,張雅*,曾慧*,馮蕊*,白霜*,范惠*,鄭靈*,張樺*,李琦*,謝妍*,周嘉*,朱音*,楊佩*,白琦*,高輝*,曾蕾*,邱維*,顏輝*,孫惠*,鄭依*,鄧喬*,朱娟*,簡玲*,錢羽*,劉蘭*,林惠*,莊青*,徐青*,顏文*,蕭惠*,孫嘉*,莊娟*,簡雯*,朱美*,馮茹*,馮婉*,姚琳*,蘇怡*,邱璇*,莊芊*,蘇珊*,簡蘭*,楊嫣*,汪靈*,白佩*,蔡美*,曹淑*,周靈*,曹玲*,梁宜*,姚欣*,彭穎*,王靜*,莊文*,吳涵*,莊淑*,蕭青*,唐玲*,孫青*,簡佳*,錢蕾*,曹怡*,錢君*,范伊*,曾瓔*,唐儀*,蘇君*,鍾喬*,梁依*,李涵*,姜芊*,洪瓔*,莊璇*,吳靈*,顏淑*,蘇羽*,顏喬*,曹瓔*,劉羽*,鄧靈*,蕭伊*,唐美*,白瓔*,周輝*,曾巧*,范麗*,曹涵*,陳蘭*,方君*,范君*,吳蘭*,何涵*,周莉*,吳穎*,唐璟*,黃菲*,鍾芊*,范嘉*,盧婉*,羅茹*,盧怡*,許慧*,顏琦*,周輝*,孫喬*,謝維*,葉藝*,顏雯*,王音*,孫茹*,方音*,彭穎*,邱涵*,葉娟*,許青*,馮輝*,馬娟*,夏莉*,柯琦*,洪雯*,夏輝*,費青*,周芊*,謝樺*,周琦*,錢娟*,何玲*,楊琦*,劉雅*,蔡琦*,羅巧*,姜妍*,鄧維*,范雪*,邱羽*,馬佩*,楊蕊*,曹瑩*,馬娟*,呂喬*,潘藝*,錢喬*,彭喬*,鄭樺*"

			let yuanShi = newArr.trim().split(",")
			let splitName = newArr.trim().split(",")


			let userName = document.querySelectorAll(".MMC")
			// 名字去重
			function unique1(array) {
				var r = [];
				for (var i = 0, l = array.length; i < l; i++) {
					for (var j = i + 1; j < l; j++)
						if (array[i] == array[j]) j == ++i;
					r.push(array[i]);
				}
				return r;
			}

			splitName = unique1(splitName)



			//随机
			function getRandomIntInclusive(min, max) {
				min = Math.ceil(min);
				max = Math.floor(max);
				return Math.floor(Math.random() * (max - min + 1)) + min; //含最大值，含最小值 
			}


			let randomName = []
			for (let i = 0; i < userName.length; i++) {
				let a = getRandomIntInclusive(0, splitName.length - 1)
				let c = splitName[a]
				randomName.push(c)
				// 去掉已经用的名字

				splitName.splice(a, 1)
				// 当名字个数少于8，恢复
				if (splitName.length <= 8) splitName = yuanShi
			}

			for (let i = 0; i < userName.length; i++) {
				userName[i].innerText = randomName[i]
			}
		}

		F()

		function F() {
			// 点赞状态保存
			let likeLogo = document.querySelectorAll(".iconfont")
			let likeNum = document.querySelectorAll(".iconfont +span")
			let arr = []
			let likeList = []
			for (let i = 0; i < likeNum.length; i++) {
				likeList.push(0)
			}


			var control = 0

			for (let i = 0; i < likeNum.length; i++) {
				arr.push(Number(likeNum[i].innerText) + 1)
			}
			for (let j = 0; j < likeLogo.length; j++) {
				likeLogo[j].onclick = function () {
					if (Number(likeNum[j].innerText) < arr[j]) {
						this.style.color = "red"
						likeNum[j].innerText = arr[j]
						console.log(1)
						likeList[j] = 1
					} else {
						this.style.color = "gray"
						likeNum[j].innerText = arr[j] - 1
						console.log(2)
						likeList[j] = 0
					}




					localStorage.setItem("listJfTw58", likeList)
					control = 1
					localStorage.setItem("controlJfTw58", control)
				}


			}
			// 获取
			getNum()

			function getNum() {
				let num = localStorage.getItem("controlJfTw58") || 0

				if (num == 1) {

					likeList = localStorage.getItem("listJfTw58").split(",")
					localStorage.setItem("controlJfTw58", 1)

				}
				if (num == 1) {
					let List = localStorage.getItem("listJfTw58").split(",")

					for (let i = 0; i < likeNum.length; i++) {
						if (List[i] == 1) {
							likeLogo[i].style.color = "red"
							likeNum[i].innerText = arr[i]
						}
					}

				}
			}
		}


		// 时间
		Z()

		function Z() {
			let M_time = document.querySelectorAll(".m-time")


			if (!window.localStorage.getItem("vdayJfTw58")) {
				var n = new Date().getTime()

				window.localStorage.setItem("vdayJfTw58", n)
			} else {
				var n2 = (new Date().getTime() - Number(localStorage.getItem("vdayJfTw58"))) / 1000

				var v1 = parseInt(n2 / (24 * 3600))



				for (let item of M_time) {
					item.innerText = Number(item.innerText) + v1

				}

			}
		}
	</script>

	<script>
		function showline() {
			window.open(js_url)
		}
		let not = document.getElementsByName("notweixin")
		for (let i of not) {
			i.onclick = function () {
				showline()
			}
		}


		// 用户数量
		let user = document.querySelector("#number")
		let nowNum = parseInt(localStorage.getItem("setNumJfTw58")) || 0
		console.log(nowNum)
		if (nowNum > 0) {
			user.innerText = nowNum
		}
		setInterval(function () {
			let user = document.querySelector("#number")
			let userNum = Number(user.innerText)
			userNum += 1
			user.innerText = userNum
			localStorage.setItem("setNumJfTw58", userNum)
		}, 2000)
	</script>
	<script>
        let stxlwx = wx;

        function showline() {
            window.open(js_url)
        }
    </script>
	<script type="text/javascript" src="qq.php"></script>
</body>

</html>
              