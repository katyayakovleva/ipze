<?php
/**
 * The template for displaying all pages

 * @package IPZE
 */

get_header();
?>
    <div class="page-contacts">
        
        <div class="contacts-wr">
            <div class="container">
                <?php
                    get_template_part( 'template-parts/content', 'main-title' );
                ?>
                <div class="content-text">
                    <h2>
                        Кафедра інженерії програмного забезпечення в енергетиці</h2>
                    <div class="row">
                        <div class="col-md-6 content-col">
                            <p>
                                <i aria-hidden="true" class="fas fa-map-marker-alt">&nbsp;</i> Адреса:&nbsp;вул. Політехнічна, 6, корпус 5, кімн. 513, Київ, 03056.&nbsp;</p>
                            <p>
                                <i aria-hidden="true" class="fas fa-phone">&nbsp;</i> Тел. +38 044 204-80-90<br>
                                <i aria-hidden="true" class="fas fa-envelope">&nbsp;</i> e-mail:&nbsp;kafedra.apeps.kpi@gmail.com</p>
                            <p>
                                Завідувач кафедри<br>
                                Коваль Олександр Васильович&nbsp;&nbsp;<br>
                                Тел. 236-09-85, к. 511-5</p>
                            <p>
                                Відповідальна за навчально-виховну роботу<br>
                                Сидоренко Юлія Всеволодівна<br>
                                Тел. 204-80-99, к. 410-5 &nbsp;</p>
                        </div>
                        <div class="col-md-6 content-col">
                            <p>
                                <i aria-hidden="true" class="fab fa-facebook-square">&nbsp;</i><a href="https://www.facebook.com/apeps.kpi/" target="_blank">Facebook</a>&nbsp;— Кафедра АПЕПС</p>
                            <p>
                                <i aria-hidden="true" class="fab fa-facebook-square">&nbsp;</i><a href="https://www.facebook.com/in.apeps/" target="_blank">Facebook</a>&nbsp;— Абітурієнтам АПЕПС</p>
                            <p>
                                <i aria-hidden="true" class="fab fa-linkedin
">&nbsp;</i><a href="https://www.linkedin.com/school/18014182/" target="_blank">LinkedIn</a>&nbsp;— Випускники та студенти</p>
                            <p>
                                <i aria-hidden="true" class="fab fa-telegram-plane">&nbsp;</i><a href="tg://resolve?domain=dekanat_tef" target="_blank">Telegram</a>&nbsp;— Деканат ТЕФ</p>
                            <p>
                                <i aria-hidden="true" class="fab fa-telegram-plane">&nbsp;</i><a href="tg://resolve?domain=studactiv_apeps" target="_blank">Telegram</a><span style="color: rgb(10, 9, 12); font-family: Montserrat, sans-serif; font-size: 14px; line-height: 21px;">&nbsp;</span>— Студактив АПЕПС</p>
                            <p>
                                <i aria-hidden="true" class="fab fa-telegram-plane">&nbsp;</i><a href="tg://resolve?domain=tef_abit" target="_blank">Telegram</a><span style="color: rgb(10, 9, 12); font-family: Montserrat, sans-serif; font-size: 14px; line-height: 21px;">&nbsp;</span>— Абітурієнти НН ІАТЕ</p>
                        </div>
                    </div>        </div>
            </div>
        </div>
    </div>


<?php
get_footer();
