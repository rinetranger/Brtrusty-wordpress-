<?php
/*
Template Name: client3
*/
 get_header("client3");?> 
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2 class="title000">売却のお問合せ</h2>
                    <p class="title000">Get in touch</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
                    <!-- ・物件所在地
            プルダウンで東京都・千葉県・埼玉県・神奈川県←一都三県のみ
            市区町村
            それ以降の住所
            建物名や号室など

            ・種類
            区分マンション
            一棟マンション・アパート
            土地
            戸建て
            その他（　　）

            ・お客様情報
            お名前
            電話番号
            アドレス
            ・連絡先ご住所
            郵便番号
            都道府県（プルダウン）
            市区町村
            それ以降の住所
            建物名や号室など -->
        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area p_100">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6">
                        <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <label class="col-lg-12"><i class="fa fa-edit fa-2x aw mr-3"></i>物件情報の入力</label>   
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="place" name="place" placeholder="物件所在地">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="tel" class="form-control" id="tel" name="tel" placeholder="都道府県">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="city" name="city" placeholder="市町村">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="district" name="district" placeholder="番地以降">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="district" name="district2" placeholder="建物名、部屋番号">
                            </div>
                           
                            <div class="form-group col-lg-6">
                                <input type="tel" class="form-control" id="tel" name="tel" placeholder="種類">
                            </div>
                            <label class="col-lg-12 mt-5"><i class="fa fa-edit fa-2x aw mr-3"></i>お客様情報の入力</label>
                            
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="お名前">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="tel" class="form-control" id="tel" name="tel" placeholder="電話番号">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="age" name="age" placeholder="年齢">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="work" name="work" placeholder="ご職業">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="postal" name="postal" placeholder="郵便番号">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="tel" class="form-control" id="tel" name="tel" placeholder="都道府県">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="city" name="city" placeholder="市町村">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="district" name="district" placeholder="番地以降">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="district" name="district2" placeholder="建物">
                            </div>
                           
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" name="message" id="message" placeholder="お問合せ内容"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                            </div>
                        </form>

                        <!--------------->
                        <div id="main">
			<h1>物件無料査定依頼</h1>
			<div id="btnprint"><a href="javascript:window.print();">PRINT</a></div>
<div class="txtbox">
			<ul class="steplist" id="step2">
				<li id="btnstep1"><span>STEP01 査定依頼について</span></li>
				<li id="btnstep2"><span>STEP02 依頼内容のご入力</span></li>
				<li id="btnstep3"><span>STEP03 依頼内容のご確認</span></li>
				<li id="btnstep4"><span>STEP04 送信完了</span></li>
			</ul>

			<h2>依頼内容のご入力</h2>
			<ul class="list1">
				<li>【必須】のついている項目は、入力必須です。</li>
<li>画像などのデータファイルの添付はできませんのでご了承ください。</li>
<li>半角カタカナで入力しますと正しく表示されなかったり、送信できない場合がありますので、半角カタカナのご使用はご遠慮ください。</li>
			</ul>
			<h4>ご売却予定の物件の所在地（対象エリア：1都3県東京都・神奈川県、千葉県、埼玉県）</h4>
<form name="form1" action="./confirm.php" method="post">
<input type="hidden" name="blocs_token" value="V6f8d6fec8af123e48fe85bb52c9d5e4c">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl1">
					<tbody>
						<tr>
							<th width="10%" rowspan="4" style="border-left: none;">住所</th>
							<th width="20%" class="lineL">郵便番号<span class="hissu">必須</span></th>
							<td width="70%" style="border-left: none; border-top: 1px solid rgb(193, 213, 234);">


<label><input name="zip1" type="text" class="txtformS "></label> -
<label><input name="zip2" type="text" class="txtformS "></label>
								<br>
								<div class="formarea w93">例：100</div>
								<div class="formarea w83">例：0004</div>
								<br>
								<span class="note1">半角数字でご入力ください</span></td>
						</tr>
						<tr>
							<th class="lineL" style="border-left: none;">都道府県<span class="hissu">必須</span></th>
							<td style="border-left: none;">

<ul class="list">
<li><label><input name="pref" type="radio" value="東京都" class=""> 東京都</label></li>
<li><label><input name="pref" type="radio" value="神奈川県" class=""> 神奈川県</label></li>
<li><label><input name="pref" type="radio" value="千葉県" class=""> 千葉県</label></li>
<li><label><input name="pref" type="radio" value="埼玉県" class=""> 埼玉県</label></li>
</ul>
						</td>
						</tr>
						<tr>
							<th class="lineL" style="border-left: none;">市区町村<span class="hissu">必須</span></th>
							<td style="border-left: none;">

<input name="addr1" type="text" class="txtformL " placeholder="">
								<br>
								<div class="formarea">例：千代田区</div></td>
						</tr>
						<tr>
							<th class="lineL" style="border-left: none;">それ以降の住所またはマンション名<span class="hissu">必須</span></th>
							<td style="border-left: none;">

<input name="addr2" type="text" class="txtformL " placeholder="">
								<div class="formarea">例：大手町一丁目９番７号 大手町フィナンシャルシティ サウスタワー16階</div></td>
						</tr>
						<tr>
							<th colspan="2" style="border-left: none;">種別<span class="hissu">必須</span></th>
							<td style="border-left: none;">

								<ul class="list">
<li><label><input name="type" type="radio" value="1" class=""> 区分所有マンション</label></li>
<li><label><input name="type" type="radio" value="2" class=""> 一棟マンション・アパート</label></li>
<li><label><input name="type" type="radio" value="3" class=""> 一戸建て</label></li>
<li><label><input name="type" type="radio" value="4" class=""> 土地</label></li>
<li><label><input name="type" type="radio" value="5" class=""> その他</label> <input name="type_other" type="text" class="txtformM " placeholder=""></li>
							</ul></td>
						</tr>
					</tbody>
				</table>

				<h4>ご売却予定の物件の詳細</h4>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl1">
					<tbody>
						<tr>
							<th width="30%" style="border-left: none;">面積</th>
							<td width="70%" style="border-left: none; border-top: 1px solid rgb(193, 213, 234);"><ul class="list">
								<li>土地：
<input name="land_size" type="text" class="txtformS " placeholder="">
							<label>
								<input type="radio" name="land" value="1"> m<sup>2</sup></label> <label>
								<input type="radio" name="land" value="2"> 坪</label></li>
								<li>建物：
<input name="bldg_size" type="text" class="txtformS " placeholder="">
							<label>
								<input type="radio" name="bldg" value="1"> m<sup>2</sup></label> <label>
								<input type="radio" name="bldg" value="2"> 坪</label></li>
							</ul>
</td>
						</tr>
						<tr>
							<th style="border-left: none;">築年</th>
							<td style="border-left: none;">
								<label><input type="radio" name="age_era" value="1"> 昭和</label>
								<label><input type="radio" name="age_era" value="2"> 平成</label>
<input name="age" type="text" class="txtformS " placeholder="">
							年築</td>
						</tr>
						<tr>
							<th style="border-left: none;">構造</th>
							<td style="border-left: none;"><ul class="list">
								<li>
									<label><input name="structure" type="radio" value="1"> 木造</label>
								</li>
								<li>
									<label><input name="structure" type="radio" value="2"> 鉄筋コンクリート</label>
								</li>
								<li>
									<label><input name="structure" type="radio" value="3"> 鉄筋鉄骨コンクリート</label></li>
								<li>
									<label><input name="structure" type="radio" value="4"> その他</label></li>
							</ul></td>
						</tr>
						<tr>
							<th style="border-left: none;">間取り</th>
							<td style="border-left: none;"><select name="floorplan" id="select2">
<option value="" selected="">選択してください</option>
<option value="1R">1R</option>
<option value="1K">1K</option>
<option value="1DK">1DK</option>
<option value="1LDK">1LDK</option>
<option value="2DK">2DK</option>
<option value="2LDK">2LDK</option>
<option value="3DK">3DK</option>
<option value="3LDK">3LDK</option>
<option value="4DK">4DK</option>
<option value="その他">その他</option>
</select></td>
						</tr>
						<tr>
							<th style="border-left: none;">その他</th>
							<td style="border-left: none;">
<textarea name="other" rows="10" class="txtformL " placeholder=""></textarea>
								<br>
							<span class="note1">売却希望時期・価格、物件の詳細、ご要望等ありましたら、
ご記入ください。</span></td>
						</tr>
					</tbody>
				</table>


				<h4>お客様情報</h4>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl1">
					<tbody>
						<tr>
							<th width="30%" style="border-left: none;">お名前<span class="hissu">必須</span></th>
							<td width="70%" style="border-left: none; border-top: 1px solid rgb(193, 213, 234);">


<label>姓 <input name="name1" type="text" class="txtformM " placeholder=""></label>
<label class="ml20">名 <input name="name2" type="text" class="txtformM " placeholder=""></label>
							</td>
						</tr>
						<tr>
							<th style="border-left: none;">フリガナ<span class="hissu">必須</span></th>
							<td style="border-left: none;">




<label>セイ <input name="kana1" type="text" class="txtformM " placeholder=""></label>
<label class="ml20">メイ <input name="kana2" type="text" class="txtformM " placeholder=""></label>
								<br>
								<div class="formarea w212">例：ムゲン</div>
								<div class="formarea w192">例：タロウ</div>
								<br>
								<span class="note1">全角カタカナでご入力ください</span></td>
						</tr>
						<tr>
							<th style="border-left: none;">電話番号<span class="hissu">必須</span></th>
							<td style="border-left: none;">


<label><input name="tel1" type="text" class="txtformS " placeholder=""></label> -
<label><input name="tel2" type="text" class="txtformS " placeholder=""></label> -
<label><input name="tel3" type="text" class="txtformS " placeholder=""></label>
								<br>
								<div class="formarea w96">例：03</div><div class="formarea w96">例：6665</div><div class="formarea w83">例：0581</div>
								<br>
								<span class="note1">半角数字でご入力ください</span></td>
						</tr>
						<tr>
							<th style="border-left: none;">メールアドレス<span class="hissu">必須</span></th>
							<td style="border-left: none;">


<input name="mail" type="text" class="txtformL " placeholder="">
								<div class="formarea">例：mugen@mugen-estate.co.jp</div>
								<br>
								<span class="note1">半角英数字でご入力ください</span></td>
						</tr>
						<tr>
							<th style="border-left: none;">メールアドレス（確認）<span class="hissu">必須</span></th>
							<td style="border-left: none;">


<input name="mail_conf" type="text" class="txtformL " placeholder="">
								<div class="formarea">例：mugen@mugen-estate.co.jp</div>
								<br>
								<span class="note1">上欄と同じメールアドレスを半角英数字でご入力ください</span></td>
						</tr>
					</tbody>
				</table>


				<h5 class="mt20">ご連絡先住所がご売却予定の物件と異なる場合のみご記入ください。</h5>
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl1">
					<tbody>
						<tr>
							<th width="10%" rowspan="4" style="border-left: none;">ご連絡先住所</th>
							<th width="20%" class="lineL">郵便番号</th>
							<td style="border-left: none; border-top: 1px solid rgb(193, 213, 234);">


<label><input name="alt_zip1" type="text" class="txtformS "></label> -
<label><input name="alt_zip2" type="text" class="txtformS "></label>
								<br>
								<div class="formarea w93">例：100</div>
								<div class="formarea w83">例：0004</div>
								<br>
								<span class="note1">半角数字でご入力ください</span></td>
						</tr>
						<tr>
							<th class="lineL" style="border-left: none;">都道府県</th>
							<td style="border-left: none;">

<select name="alt_pref" id="select" class="txtformM ">
<option value="" selected="">都道府県</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>
</select>
</td>
						</tr>
						<tr>
							<th class="lineL" style="border-left: none;">市区町村</th>
							<td style="border-left: none;">

<input name="alt_addr1" type="text" class="txtformL " placeholder="">
								<br>
								<div class="formarea">例：千代田区</div></td>
						</tr>
						<tr>
							<th class="lineL" style="border-left: none;">それ以降の住所</th>
							<td style="border-left: none;">

<input name="alt_addr2" type="text" class="txtformL " placeholder="">
								<div class="formarea">例：大手町一丁目９番７号 大手町フィナンシャルシティ サウスタワー16階</div></td>
						</tr>
					</tbody>
				</table>

				<h4>よろしければアンケートにご協力ください</h4>
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tbl1">
					<tbody>
						<tr>
							<th width="30%" rowspan="4" style="border-left: none;">当社を知ったきっかけ</th>
							<td style="border-left: none; border-top: 1px solid rgb(193, 213, 234);"><ul class="halflist">
								<li><label><input name="from[]" type="checkbox" value="1"> 当社ホームページ</label></li>
								<li><label><input name="from[]" type="checkbox" value="2"> 不動産関連ポータルサイト</label></li>
								<li><label><input name="from[]" type="checkbox" value="3"> 新聞広告</label></li>
								<li><label><input name="from[]" type="checkbox" value="4"> 折込ちらし</label></li>
								<li><label><input name="from[]" type="checkbox" value="5"> 知人の紹介</label></li>
								<li><label><input name="from[]" type="checkbox" value="6"> 不動産仲介会社様からの紹介</label></li>
								<li class="fullline"><label><input name="from[]" type="checkbox" value="7"> その他</label> <input name="from7_detail" type="text" class="txtformL "></li>
							</ul></td>
						</tr>
					</tbody>
				</table>
				<div class="btnslist">
					<ul>
						<li><input type="submit" class="btninput" value="入力内容を確認する"></li>
					</ul>
				<!-- end of class(btnslist) -->
				</div>
</form>
			<!-- end of class(txtbox) -->
			</div>
			<!-- end of id(main) -->
		</div>
        <!------------->


                        <div id="accordion" role="tablist" class="solution_collaps">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            個人情報保護に関する基本方針【プライバシーポリシー】
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p>（ 当社は、個人情報保護の重要性に鑑み、また不動産業、保険業に対するお客さまの信頼をより向上させるため、個人情報の保護に関する法律（個人情報保護法）、行政手続における特定の個人を識別するための番号の利用等に関する法律（番号法）、その他の関係法令、関係官庁からのガイドライン、特定個人情報の適正な取扱いに関するガイドラインなどを遵守して、個人情報を厳正・適切に取り扱うとともに、安全管理について適切な措置を講じます。<br>
                                            当社は、個人情報の取扱いが適正に行われるように、従業者への教育・指導を徹底し、適正な取扱いが行われるよう取り組んでまいります。また、個人情報の取扱いに関する苦情・ご相談に迅速に対応し、当社の個人情報の取扱いおよび安全管理に係る適切な措置については、適宜見直し、改善いたします。
                                        </p>
                                        <p class="p-policy-sign">BR TRUSTY株式会社</p>
                                        <div class="pp-box">
                                            <p class="pp-h">1．個人情報の取得</p>
                                            <p>当社は、業務上必要な範囲内で、かつ、適法で公正な手段により個人情報を取得します。<br>（下記６．の個人番号および特定個人情報を除きます。）
                                            </p>
                                        </div><!-- /pp-box -->

                                        <div class="pp-box">
                                            <p class="pp-h">2．個人情報の利用目的</p>
                                            <p>当社は、取得した個人情報（個人番号および特定個人情報については、下記６．をご覧ください。）を当該業務の遂行に必要な範囲内で利用します。<br>
                                                当社における具体的な個人情報の利用目的は次のとおりであり、それら以外の他の目的に利用することはありません。
                                            </p>
                                            <ul>
                                                <li>ご質問・ご相談・ご依頼に対する回答及び資料送付</li>
                                                <li>居住用住宅販売、賃貸住宅の販売、仲介、賃貸、管理などの取引に関する契約の履行、情報、サービスの提供</li>
                                                <li>当社が取り扱う損害保険、生命保険およびこれらに付帯・関連するサービスの提供</li>
                                            </ul>
                                            上記の利用目的の変更は、相当の関連性を有すると合理的に認められている範囲にて行い、変更する場合には、その内容をご本人に対し、原則として書面などにより通知し、または当社のホームページ　http://www.br-trusty.jp　などにより公表します。<br>
                                            当社に対し保険業務の委託を行う保険会社の利用目的は、保険会社のホームページ（下記）に記載してあります。<br>
                                            　・　東京海上日動火災保険（<a href="https://www.tokiomarine-nichido.co.jp/"
                                                target="_blank">https://www.tokiomarine-nichido.co.jp/</a>）

                                        </div><!-- /pp-box -->

                                        <div class="pp-box">
                                            <p class="pp-h">3．個人データの安全管理措置</p>
                                            <p>当社は、取り扱う個人データの漏えい、滅失または毀損の防止、その他個人データの安全管理のため、安全管理に関する取扱規程などの整備および実施体制の整備など、十分なセキュリティ対策を講じるとともに、利用目的の達成に必要とされる正確性・最新性を確保するための適切な措置を講じ、万が一、問題等が発生した場合は、速やかに適当な是正対策を行います。
                                            </p>
                                        </div><!-- /pp-box -->

                                        <div class="pp-box">
                                            <p class="pp-h">4．個人データの第三者への提供</p>
                                            <p>当社は、次の場合を除き、あらかじめご本人の同意なく第三者に個人データを提供しません。</p>
                                            <ul>
                                                <li>法令に基づく場合</li>
                                                <li>人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき。</li>
                                                <li>公衆衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき。</li>
                                                <li>国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき。<br>
                                                    また、個人データを第三者に提供したとき、あるいは第三者から提供をうけたとき、提供・取得経緯等の確認を行うとともに、提供先・提供者の氏名等、法令で定める事項を記録し、保管します。
                                                </li>
                                            </ul>

                                        </div><!-- /pp-box -->

                                        <div class="pp-box">
                                            <p class="pp-h">5．センシティブ情報の取扱い</p>
                                            <p>当社は、要配慮個人情報（人種、信条、社会的身分、病歴、前科・前歴、犯罪被害情報などをいいます）ならびに労働組合への加盟、門地および本籍地、保健医療および性生活に関する情報（センシティブ情報）については、次の場合を除き、原則として取得、利用または第三者提供を行いません。
                                            </p>
                                            <ul>
                                                <li>法令に基づく場合</li>
                                                <li>人の生命、身体又は財産の保護のために必要がある場合</li>
                                                <li>公衆衛生の向上又は児童の健全な育成の推進のため特に必要がある場合</li>
                                                <li>国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合</li>
                                                <li>保険料収納事務等の遂行上必要な範囲において、政治・宗教等の団体若しくは労働組合への所属若しくは加盟に関する従業員等のセンシティブ情報を取得、利用又は第三者提供する場合
                                                </li>
                                                <li>相続手続を伴う保険金支払事務等の遂行に必要な限りにおいて、センシティブ情報を取得、利用又は第三者提供する場合</li>
                                                <li>保険業の適切な業務運営を確保する必要性から、本人の同意に基づき業務遂行上必要な範囲でセンシティブ情報を取得、利用又は第三者提供する場合
                                                </li>
                                            </ul>

                                        </div><!-- /pp-box -->


                                        <div class="pp-box">
                                            <p class="pp-h">6．個人番号および特定個人情報の取扱い</p>
                                            <p>当社は、個人番号および特定個人情報について、法令で限定的に明記された目的以外のために取得・利用しません。また、番号法で限定的に明示された場合を除き、個人番号および特定個人情報を第三者に提供しません。
                                            </p>
                                        </div><!-- /pp-box -->

                                        <div class="pp-box">
                                            <p class="pp-h">7．個人情報保護法に基づき保有個人データの開示、訂正、利用停止など</p>
                                            <p>個人情報保護法に基づく保有個人データに関する開示、訂正または利用停止などに関するご請求については、ご請求者がご本人であることを確認させていただいたうえで手続きを行います。保険会社や他社の保有個人データに関しては当該会社に対してお取次ぎいたします。当社の保有個人データに関し、必要な調査を行った結果、ご本人に関する情報が不正確である場合は、その結果に基づいて正確なものに変更させていただきます。
                                                なお、上記開示などのお手続きについては所定の手数料をいただきます。手続きを希望される方は、下記お問い合わせ先までお申し付けください。
                                            </p>
                                        </div><!-- /pp-box -->

                                        <div class="pp-box">
                                            <p class="pp-h">8．お問い合わせ先</p>
                                            <p>ご連絡先は下記のお問い合わせ窓口となります。また保険事故に関する照会については、下記お問い合わせ窓口のほか、保険証券記載の保険会社の事故相談窓口にもお問い合わせいただくことができます。<br>
                                                　なお、ご照会者がご本人であることをご確認させていただいたうえで、ご対応させていただきますので、あらかじめご了承願います。

                                            </p>
                                        </div><!-- /pp-box -->

                                        <div class="pp-box">
                                            <p class="pp-h">【連絡先】 </p>
                                            <p>BR TRUSTY株式会社<br>
                                                TEL：03-5790-9700／FAX：03-5790-9701<br>
                                                受付時間／10:00～19:00　定休日／土・日<br>
                                                E-mail：info@br-trusty.jp
                                            </p>
                                        </div><!-- /pp-box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="touch_details">
                            <div class="l_title">
                                <i class="fa  fa-envelope-o  fa-3x aw mb-5"></i> 
                                <h6>Sales Inquiry</h6>
                                <h2 class="title01">売却のお問合せ
                                </h2>
                            </div>
                            <p>お客様のご相談に真摯に対応いたします。メールもしくは電話でのご相談、お気軽にお問合せください。<br/>受付時間：平日10:00〜18:00
                                （土・日・祝日を除く）   </p>
                            <h5>お気軽にお電話ください。</h5>
                            <a  class="tel" href="tel:0357909700"><h4><i class="fa fa-phone-square fa-x aw"></i>  03-5790-9700</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get in Touch Area =================-->
        
        <!--================Map Area =================-->
        
        <!--================End Map Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footr_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row footer_widget_inner">
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_about_widget">
                                <img src="img/footer-logo.png" alt="">
                                <h4 class="bottomtitle">BR TRUSTY株式会社</h4>
                                <p>〒150-0046<br/> 東京都渋谷区松濤２丁目２０−１０<br/>TEL:03-5790-9700</p>
                            </aside> 
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_insta_widget">
                                <div class="f_title">
                                    <h3></h3>
                                </div>
                                <!-- <ul>
                                    <li><a href="#"><img src="img/instagram/ins-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-6.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-7.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/instagram/ins-8.jpg" alt=""></a></li>
                                </ul> -->
                            </aside>
                        </div>
                        <!-- <div class="col-lg-4 col-sm-6">
                            <aside class="f_widget f_subs_widget">
                                <div class="f_title">
                                    <h3>Subscribe to newsletter</h3>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your e-mail address here" aria-label="Your e-mail address here">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
                                </div>
                            </aside>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by BR TRUSTY
</h5>
                    </div>
                   
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>送信完了いたしました。</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> エラー。もう一度内容をお確かめください。 </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/circle-bar/circle-progress.min.js"></script>
        <script src="vendors/circle-bar/plugins.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        
        <script src="js/circle-active.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>