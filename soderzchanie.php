<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="pics/logo.png" type="image/png">
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <title>Содержание работы</title>
    </head>
    <body>
        <?php include('blocks/head.php');?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3>
                        Содержание проделанной работы:
                    </h3>
                    <h6>
                        1.Как получить ЭЦП?
                    </h6>
                    <p>
                        Получить квалифицированный сертификат электронной подписи можно в аккредитованных удостоверяющих центрах. 
                    </p>
                    <p>
                        Для получения квалифицированного сертификата электронной подписи физическими лицами требуются:
                    </p>
                    <ol>
                        <li class="list-item">
                            Документ, удостоверяющий личность;
                        </li>
                        <li class="list-item">
                            Страховое свидетельство обязательного пенсионного страхования (СНИЛС);
                        </li>
                        <li class="list-item">
                            Индивидуальный номер налогоплательщика (ИНН);
                        </li>
                        <li class="list-item">
                            Основной государственный регистрационный номер записи о государственной регистрации физического лица в качестве индивидуального предпринимателя (если вы являетесь индивидуальным предпринимателем);
                        </li>
                        <li class="list-item">
                            Дополнительный комплект документов, подтверждающий ваши полномочия действовать от имени юридического лица (если вы получаете подпись представителя юридического лица).
                        </li>
                    </ol> 
                    <p>
                        Для получения квалифицированного сертификата электронной подписи юридическими лицами требуются:
                    </p>
                    <ol>
                        <li class="list-item">
                            Учредительные документы;
                        </li>
                        <li class="list-item">
                            Документ, подтверждающий факт внесения записи о юридическом лице в Единый государственный реестр юридических лиц; 
                        </li>
                        <li class="list-item">
                            Свидетельство о постановке на учет в налоговом органе заявителя.
                        </li>
                    </ol> 
                    <h6>
                        • Как проверить аккредитацию УЦ?
                    </h6>
                    <p>
                        На сайте <a href="https://digital.gov.ru/ru/activity/govservices/certification_authority/">министерства цифрового развития, связи и массовых коммуникаций Российской Федерации</a> 
                    </p>
                    <h6>
                        • Стоит ли приобретать лицензии ФСТЕК И ФСБ?
                    </h6>
                    <p>
                        В нашем случае нет. В ПП №313 есть пункт№20, который можно назвать исключением. Наша ситуация попала именно в этот пункт.
                    </p>
                    <h6>
                        • Для кого необходимо внедрить СЭД?
                    </h6>
                    <p>
                    СЭД необходима там, где присутствует ИС вместе в ПДн. Сюда можно отнести:
                    </p>
                    <ul>
                        <li class="list-item">
                            Приемную комиссию (сюда отнесем ПДн поступающих; ПДн работников; любую конфиденциальную информацию, связанную с документацией, организацией работы и т.д.
                        </li>
                        <li class="list-item">
                            Бухгалтерию;
                        </li>
                        <li class="list-item">
                            Кадровый учет (сюда можно отнести распоряжения, зачисления и т.д.).
                        </li>
                    </ul>
                    <h6>
                        • Какую СЭД стоит выбрать?
                    </h6>
                    <p>
                        Из личного источника было выявлено, что ЭЦП от другого УЦ можно использовать для своей работы. Так что по итогу была выбрана СЭД от компании 1С. Она уже используется в приемной комиссии, поэтому внедрить ее и в другие структуры было бы верным решением. Подробнее с предоставляемым продуктом этой компании можно оснакомиться на сайте 1С в разделе:<a href="https://solutions.1c.ru/catalog/doc8/structure">1С:Документооборот 8 ПРОФ</a> 
                    </p>
                </div>
            </div>
        </div>
        <?php include('blocks/footer.php');?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="webexam-crypto.js"></script>
    </body>
</html>
