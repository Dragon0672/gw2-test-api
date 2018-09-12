<?php

namespace AppBundle\Controller;

use AppBundle\Utils\GuildLogClass;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $gw2Responses = $this->getCurl4();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'gw2Responses' => $gw2Responses
        ]);
    }

    private function getCurl4()
    {
        $url = 'https://api.guildwars2.com/v2/guild/6E10937F-27B7-E711-80D5-E4115BD7186C/log';

        $headers = array(
            "Authorization: Bearer 75BC46B3-BE13-6F46-A1C2-3391C392404DEED235EA-BB41-408E-B201-0AB1E97E3018",
            "Content-Type: application/json"
        );

        // Initializing a cURL session
        $ch = curl_init();

        // Configure curl for website
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // if the URL is in HTTPS
        if (preg_match('`^https://`i', $url))
        {
            // Do not check the validity of the SSL certificate
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        }

        // Lets return the cURL Header content
        // curl_setopt($ch, CURLOPT_HEADER, true);
        // Lets return the cURL Body content
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


        // dump($ch);
        // Retrieving the response returned by the execution of the cURL query
        $cURLResponse = curl_exec($ch);
        // dump($cURLResponse);

        // Encoding the cURL response in JSON format
        $jsonResponse = json_decode($cURLResponse);
        // dump( $jsonResponse );

        if ( isset( $jsonResponse )) {
            $GuildLog = new GuildLogClass();
            foreach ( $jsonResponse as $key => $value ) {
                // dump( $value );
                /*if ( isset( $value->id ) ) {
                    // dump( $value->id );
                    $GuildLog->setLogId( $value->id );
                    dump( $GuildLog );
                }*/

                foreach ( $GuildLog as $logVal ) {
                    // if( isset( $value->id ) ){
                    //     $oldValue = $GuildLog->getLogId();
                    //     $newValue = $value->id;
                    //     $logValue = $newValue ?: $oldValue;
                    //     $GuildLog->setLogId( $logValue );
                    // }
                    echo "test";
                dump($logVal);
                }

                // if ( isset( $value->item_id ) ) {
                //     $GuildLog->setItems( $value->item_id );
                // }
            }
        }

        // dump($jsonResponse);

        // Closing the cURL session
        curl_close($ch);
        // dump($cURLResponse);

        return $jsonResponse;
    }

    private function getCurl3()
    {
        $url = 'https://api.guildwars2.com/v2/guild/6E10937F-27B7-E711-80D5-E4115BD7186C/log';

        $headers = array(
            "Authorization: Bearer 75BC46B3-BE13-6F46-A1C2-3391C392404DEED235EA-BB41-408E-B201-0AB1E97E3018",
            "Content-Type: application/json"
        );

        // Initializing a cURL session
        $ch = curl_init();

        // Configure curl for website
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // if the URL is in HTTPS
        if (preg_match('`^https://`i', $url))
        {
            // Do not check the validity of the SSL certificate
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        }

        // curl_setopt($ch, CURLOPT_HEADER, true);à
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


        // dump($ch);
        // Retrieving the response returned by the execution of the cURL query
        $cURLResponse = curl_exec($ch);
        // dump($cURLResponse);

        // Encoding the cURL response in JSON format
        $jsonResponse = json_decode($cURLResponse);
        dump($jsonResponse);

        // Closing the cURL session
        curl_close($ch);
        // dump($cURLResponse);

        return $jsonResponse;
    }

    private function getCurl2()
    {
        $urlCharacters = 'https://api.guildwars2.com/v2/characters';

        $headers = array(
            "Authorization: Bearer 75BC46B3-BE13-6F46-A1C2-3391C392404DEED235EA-BB41-408E-B201-0AB1E97E3018",
            "Content-Type: application/json"
        );

        $timeout = 10;

        // Initializing a cURL session
        $ch = curl_init();

        // Configure curl for website
        curl_setopt($ch, CURLOPT_URL, $urlCharacters);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // if the URL is in HTTPS
        if (preg_match('`^https://`i', $urlCharacters))
        {
            // Do not check the validity of the SSL certificate
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        }

        // curl_setopt($ch, CURLOPT_HEADER, true);à
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


        dump($ch);
        // Retrieving the response returned by the execution of the cURL query
        $cURLResponse = curl_exec($ch);
        dump($cURLResponse);

        // Encoding the cURL response in JSON format
        $jsonResponse = json_decode($cURLResponse);
        dump($jsonResponse);

        // Closing the cURL session
        curl_close($ch);
        // dump($cURLResponse);

        return $jsonResponse;
    }

    private function getCurl1()
    {
        $url = 'https://api.guildwars2.com/v2/achievements/daily';
        $timeout = 10;

        // Initializing a cURL session
        $ch = curl_init($url);

        // Seting the request timeout (in seconds)
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

        // if the URL is in HTTPS
        if (preg_match('`^https://`i', $url))
        {
            // Do not check the validity of the SSL certificate
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

        // Retrieving the response returned by the execution of the cURL query
        $cURLResponse = curl_exec($ch);
        // dump($cURLResponse);

        // Encoding the cURL response in JSON format
        $jsonResponse = json_decode($cURLResponse);
        // dump($jsonResponse);

        // Closing the cURL session
        curl_close($ch);
        // dump($cURLResponse);

        return $jsonResponse;
    }
}
