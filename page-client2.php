<?php
/*
Template Name: client2
*/
get_header("client2");?> 
<!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2 class="title000">購入のお問合せ</h2>
                    <p class="title000">Get in touch</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
       
        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area p_100">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?> 
                        <!-- <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
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
                                <input type="text" class="form-control" id="district" name="district2" placeholder="建物名、部屋番号">
                            </div>
                           
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" name="message" id="message" placeholder="お問合せ内容"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                            </div>
                        </form> -->
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
                                <h6>Purchase inquiry</h6>
                                <h2 class="title01">購入のお問合せ
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
        
        
        <?php get_footer();?>