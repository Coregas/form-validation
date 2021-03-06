<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Žinutės</title>
        <link rel="stylesheet" media="screen" type="text/css" href="public/css/screen.css" />
    </head>
    <body>
        <div id="wrapper">
            <h1>Jūsų žinutės</h1>
            <form method="post" action="index.php">
                <p class="err">
                    <label for="fullname">Vardas, pavardė *</label><br/>
                    <input id="fullname" type="text" name="fullname" value="" />
                </p>
                <p>
                    <label for="birthdate">Gimimo data *</label><br/>
                    <input id="birthdate" type="text" name="birthdate" value="" />
                </p>
                <p>
                    <label for="email">El.pašto adresas</label><br/>
                    <input id="email" type="text" name="email" value="" />
                </p>
                <p class="err">
                    <label for="message">Jūsų žinutė *</label><br/>
                    <textarea id="message"></textarea>
                </p>
                <p>
                    <span>* - privalomi laukai</span>
                    <input type="submit" value="Skelbti" />
                    <img src="public/img/ajax-loader.gif" alt="" />
                </p>
            </form>
            <ul>
                <li>
                    <strong>Šiuo metu žinučių nėra. Būk pirmas!</strong>
                </li>
                <li>
                    <span>2010 01 01 08:59</span> <a href="mailto:example@example.com">Vardas Pavardė</a>, 13 m.<br/>
                    Įkėlėme šeimos dienos akciją. Dėl papildomos medžiagos užtrukome šiek tiek ilgiau nei įprasta.
                </li>
                <li>
                    <span>2010 01 01 08:59</span> Vardas Pavardė, 75 m. <br/>
                    Įkėlėme šeimos dienos akciją. Dėl papildomos medžiagos užtrukome šiek tiek ilgiau nei įprasta.
                </li>
                <li>
                    <span>2010 01 01 08:59</span> Vardas Pavardė, 10 m. <br/>
                    Įkėlėme šeimos dienos akciją. Dėl papildomos medžiagos užtrukome šiek tiek ilgiau nei įprasta.
                </li>
                <li>
                    <span>2010 01 01 08:59</span> <a href="mailto:example@example.com">Vardas Pavardė</a>, 25 m. <br/>
                    Įkėlėme šeimos dienos akciją. Dėl papildomos medžiagos užtrukome šiek tiek ilgiau nei įprasta.
                </li>
                <li>
                    <span>2010 01 01 08:59</span> Vardas Pavardė, 26 m. <br/>
                    Įkėlėme šeimos dienos akciją. Dėl papildomos medžiagos užtrukome šiek tiek ilgiau nei įprasta.
                </li>
            </ul>
            <p id="pages">
                <a href="#" title="atgal">atgal</a>
                <a href="#" title="1">1</a>
                2
                <a href="#" title="3">3</a>
                <a href="#" title="4">4</a>
                <a href="#" title="toliau">toliau</a>
            </p>
        </div>
    </body>
</html>
