<HTml xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml" lang="en">
  
  <head><link rel="stylesheet" type="text/css" hs-webfonts="true" href="https://fonts.googleapis.com/css?family=Lato|Lato:i,b,bi">
    <title>Tickevent</title>
    <meta property="og:title" content="Email template">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style type="text/css">
      a{ 
        text-decoration: underline;
        color: inherit;
        font-weight: bold;
        color: #253342;
      }
      
      h1 {
        font-size: 56px;
      }
      
        h2{
        font-size: 28px;
        font-weight: 900; 
      }
      
      p {
        font-weight: 100;
      }
      
      td {
    vertical-align: top;
      }
      
      #email {
        margin: auto;
        width: 600px;
        background-color: white;
      }
      
      button{
        font: inherit;
        background-color: #FF7A59;
        border: none;
        padding: 10px;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 900; 
        color: white;
        border-radius: 5px; 
        box-shadow: 3px 3px #d94c53;
      }
      
      .subtle-link {
        font-size: 9px; 
        text-transform:uppercase; 
        letter-spacing: 1px;
        color: #CBD6E2;
      }
    </style>
    
    </head>
    
    <body bgcolor="#d55811" style="width: 100%; margin: auto 0; padding:0; font-family:Lato, sans-serif; font-size:18px; color:#33475B; word-break:break-word">
  
      
        <div id="email">
            <! Banner --> 
            <table role="presentation" width="100%">
                <tr>
                <td bgcolor="#D35400" align="center" style="color: white;">
                    <img src="https://tickevent.app/logo/logo_1.png" width="400px" align="middle">
                </td>
            </table>

            <table role="presentation" border="0" cellpadding="0" cellspacing="10px">
                <tr>
                    <td>
                        <h2> {{ $title }}</h2>
                            <p>
                                Gracias por utiliza nuestra plataforma.
                                <br>
                                Adjunto encontraras tu comprobante con los datos de tu evento.            
                            </p>
                    </td> 
                </tr>
            </table>

            <table role="presentation" bgcolor="#EAF0F6" width="100%" style="margin-top: 10px;" >
                <div class="qrTicket qrTicket--resumen">
                    <div  align="center">
                        <h2>{{$titulo}}</h2>
                    </div>
                    <section>
                        <div>
                            <table role="presentation">
                                <tr >
                                    <td><p>Nombre: </p></td>
                                    <td><p>{{$nombres}}</p></td>
                                </tr>
                                <tr >
                                    <td><p>Apellidos: </p></td>
                                    <td><p>{{$apellidos}}</p></td>
                                </tr>
                            </table>
                        </div>
    
                    </section>
    
                </div>
    
            <!-- Footer --> 
        
            <table role="presentation" bgcolor="#d55811" width="100%" >
                <tr>
                <td align="center" style="padding: 30px 30px;">
                    <p style="color:#fdfeff">&hearts; Busca mas eventos</p>
                    <a href="https://tickevent.app/">TICKEVENT </a>      
                </td>
                </tr>
            </table> 
        </div>
    </body>
</html>