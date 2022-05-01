<html>
    <body style="background-color: #f1f1f1; padding: 20px;">
        <h2 style="text-align: center">Formulaire de contact</h2> <br><br>
        <p style="font-size: 16px; color: #4e4e4e">
            Vous avez recu un email de la part de : {{ $data['full_name'] }} <br><br>

            Ses cordonnées : <br><br>
            
            Nom et prénom :  {{ $data["full_name"] }}<br>
            Email :  {{ $data['email'] }}<br><br>
            Message :  {!! $data['message'] !!}<br><br>
            
            Merci
        </p>
        
    </body>
</html>

