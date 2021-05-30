<?php
/*
Template Name: client
*/
 get_header("client");?> 
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2 class="title000">退去申請</h2>
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
                        <!-- <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm"
                            novalidate="novalidate">
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="お名前">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="tel" class="form-control" id="tel" name="tel" placeholder="電話番号">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="物件名*">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="部屋番号*">
                            </div>
                            <div class="form-group col-lg-12">
                                <input class="form-control" name="message" id="message" placeholder="引っ越し予定日">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" name="message" id="message" placeholder="内容"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                            </div>
                        </form> -->
                        <div>


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
                    </div>
                    <div class="col-lg-6">
                        <div class="touch_details">
                            <div class="l_title">
                                <i class="fa  fa-envelope-o  fa-3x aw mb-5"></i>
                                <h6>Moving</h6>
                                <h2 class="title01">退去申請
                                </h2>
                            </div>
                            <p>お客様のご相談に真摯に対応いたします。メールもしくは電話でのご相談、お気軽にお問合せください。<br />受付時間：平日10:00〜18:00
                                （土・日・祝日を除く） </p>
                            <h5>お気軽にお電話ください。送信後、数日以内に担当からご連絡差し上げます。</h5>
                            <a  class="tel" href="tel:0357909700"><h4><i class="fa fa-phone-square fa-x aw"></i>  03-5790-9700</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get in Touch Area =================-->
    <section>
        <div class="container">
            
                <div class="col-lg-12 mb-5">
                    <h4 class="title02"><i class="fa  fa-asterisk fa-x aw mr-3"></i>ご注意とお願い</h4>
                    <p class="title06 pr-3"><i class="fa fa-caret-right fa-x aw mr-3"></i>①契約解除日 </p>
                    <p>　　賃貸借契約書の契約解除の条項に基づき、届出日の翌日から所定の予告期間が必要です。万一、その予告期間に満たない間に退去される場合、居住の有無にかかわらず予告期間分の賃料等がかかりますのでご注意ください。
                        </p>
                        <p class="title06 pr-3"><i class="fa fa-caret-right fa-x aw mr-3"></i>②退去日 </p>
                    <p>　　退去は、住宅を完全に明渡し、カギを返還したときに完了したものとします。なお、カギの返還以降は、契約解除日以前でも住宅の使用はできません。
                        </p>
                        </i><p class="title06 pr-3"><i class="fa fa-caret-right fa-x aw mr-3"></i>③賃料等 </p>
                        <p>　契約解除日以前に住宅を退去されても、契約解除日までいただきます。解約月の賃料は満額でお支払いください。精算後に敷金の返還と合わせて日割り分をご返還致します。
                            </p>
                    
                            <p class="title06 pr-3"><i class="fa fa-caret-right fa-x aw mr-3"></i>④公共料金等</p>
                    <p>　　電気・ガス・水道・電話等は各機関に前もって連絡し、必ず退去日までの料金を精算してください。
                        </p>
                    
                        <p class="title06 pr-3"><i class="fa fa-caret-right fa-x aw mr-3"></i>⑤敷金の返金 </p>
                    <p>　　敷金は、賃料及び修繕費等の支払い債務が残っている場合には、その債務金額を控除した残額を退去後1か月以内に上記指定口座にお振込みいたします。
                        </p>
                    
                        <p class="title06 pr-3"><i class="fa fa-caret-right fa-x aw mr-3"></i>⑥退去日の変更 </p>
                    <p>　　一度ご通知いただいた退去日は、原則としていかなる理由があっても変更できません。引っ越し日が未定の場合は余裕をもって退去日を設定してください。
                        </p>

            </div>
        </div>
                
    </section>
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