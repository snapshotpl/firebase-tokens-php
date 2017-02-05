<?php

namespace Firebase\Auth\Token;

use Firebase\Auth\Token\Domain\KeyStore;

/**
 * @see https://www.googleapis.com/robot/v1/metadata/x509/securetoken@system.gserviceaccount.com
 * @see https://firebase.google.com/docs/auth/admin/verify-id-tokens#verify_id_tokens_using_a_third-party_jwt_library
 *
 * @codeCoverageIgnore
 */
final class StaticKeyStore implements KeyStore
{
    /**
     * @var ArrayKeyStore
     */
    private $keys;

    public function __construct()
    {
        $this->keys = new ArrayKeyStore([
            '683b8199e2585658eae6c19be8dc9dfeadba93a7' => "-----BEGIN CERTIFICATE-----\nMIIDHDCCAgSgAwIBAgIIZ0MWiTH9L2kwDQYJKoZIhvcNAQEFBQAwMTEvMC0GA1UE\nAxMmc2VjdXJldG9rZW4uc3lzdGVtLmdzZXJ2aWNlYWNjb3VudC5jb20wHhcNMTcw\nMjA0MDA0NTI2WhcNMTcwMjA3MDExNTI2WjAxMS8wLQYDVQQDEyZzZWN1cmV0b2tl\nbi5zeXN0ZW0uZ3NlcnZpY2VhY2NvdW50LmNvbTCCASIwDQYJKoZIhvcNAQEBBQAD\nggEPADCCAQoCggEBAL8tht823GrqA9RekfPk5OUgXB3L9MZqOSAhLd/f945wHDyB\nCe3KoNN4Kp4JV6vxKVDbNhhNGnQ+wKUqp7ZjLwTNlKSZfpgu4np57bJTfVy9LKmx\nFm2usbD4DsJDohbxCMJxy3oUdamh+5bL0OlVFo/g4epIh8zhAmnCWzKNaxF4sqWp\n8QSbFajpK0lyLHokYmTQgC7aP4N8LZc8E/vg/OoaCgs4s5iClQJAr4F8CdqOFrEI\n9xmksOHj42xpTPmIxTjSFXmoDBwHH06s4TkZ4eERQJ+SU6yBoTwqMx2jNHA+xRNL\nPiFI6CH8Oqlr6WwSXIbMelzjD6W6/jPFcP+kHo0CAwEAAaM4MDYwDAYDVR0TAQH/\nBAIwADAOBgNVHQ8BAf8EBAMCB4AwFgYDVR0lAQH/BAwwCgYIKwYBBQUHAwIwDQYJ\nKoZIhvcNAQEFBQADggEBAKcHrm78srACeIP9NLI8UkaL1ehSEDIhRq9a//s40Up3\nRXx1c7Jw51mPS9QCtU7FCIY+WvG+P9ViNwJYQetfn5IuVEfsdFCrhnFDeXD/yzRJ\nMslFusN4Ft+MW5is5cOGLOChMVxUiqsAHQrN+Hr8hJcKt1ImeakqtzrsUPPy7Pqa\nNcqqkTJOqTKVnEesNVjOMj7+UoGMcbrBY2qklIyFR0P5EyrAVNdq81YYlgeCLLQD\nBzgmqLEipxgt6B7/JTAbfwomUWS7PAgXI2g5XxMn00MhUeVfrnJw6mGQcjOeAd3v\n6nZnhZqrj6cT8BKTuAloHQi+1FDuWVvOdz272CJN4uo=\n-----END CERTIFICATE-----\n",
            'e63bafbb9301d7805ecf73c034d598daf668eebe' => "-----BEGIN CERTIFICATE-----\nMIIDHDCCAgSgAwIBAgIIU8tufmlnEzowDQYJKoZIhvcNAQEFBQAwMTEvMC0GA1UE\nAxMmc2VjdXJldG9rZW4uc3lzdGVtLmdzZXJ2aWNlYWNjb3VudC5jb20wHhcNMTcw\nMjAyMDA0NTI2WhcNMTcwMjA1MDExNTI2WjAxMS8wLQYDVQQDEyZzZWN1cmV0b2tl\nbi5zeXN0ZW0uZ3NlcnZpY2VhY2NvdW50LmNvbTCCASIwDQYJKoZIhvcNAQEBBQAD\nggEPADCCAQoCggEBAN25JAMTkk3tSWqllSAR98n5UZNy8tCO/uy9ZMNKekB0JKxl\nm7z3/EBmL/ltF7vQi3BqX8kHVsUkfTBoFG7Iv0TjV6IviR0wBh1QMxEUdKBSGT6C\nCyvDSPN12rsrmlKnE6CU9jQ1+UCRbZy9I7djA10Jv4paQQPQBbe9vWdJ1XJ/EpfS\n4tM2nSSBgkjHGtowXKGySCoez/Ktu0xhf5kbZgtX+0vgOyHey1NPkmr5Uc9VSHWl\n89Glyb9WTkbWW3KCDybz7Kl7nPw6NvH0K58utWTsmXmXO05u5on1uOPj8WHVdlfR\nfINyXuOpEfOoXCSqn5JmkbXZAOKJpGuLPaS/cIkCAwEAAaM4MDYwDAYDVR0TAQH/\nBAIwADAOBgNVHQ8BAf8EBAMCB4AwFgYDVR0lAQH/BAwwCgYIKwYBBQUHAwIwDQYJ\nKoZIhvcNAQEFBQADggEBAAeJDY0foIPaxjeb9dE9ICT3OpzHRmyuPTa56RLYbzWQ\nOgL+m2Q//5Xe1yTTTrhYxRqZWcmxy5nZyhqcEem3vwOZ6wG3R7HLWKYonQVPl2PC\nNluKkvd4iBsE10GY7IO8AnnNnb3tZlXTxtJ6ygQ+lPojwZJDEzED6kyrwyUwtrq0\nkrpWSNa7t1+b943RqrulzF9FPXZY/DoVSw1FofnvFeFOUTEulLr0oniNR2LtaxHL\nlmeVWm9rknoauaRn7iqln3mkFzNNXAW4Pj5eync403wcWPl6SQTlelY1mUJx77oY\nayn0W8cC7Bi7l+5A5yxmJnyb7kHvw1Gwnlo1qt1YZEc=\n-----END CERTIFICATE-----\n",
            'dc9db39505ed15d93a91d801460d200a00b6ccee' => "-----BEGIN CERTIFICATE-----\nMIIDHDCCAgSgAwIBAgIIYA9L8NjtlSMwDQYJKoZIhvcNAQEFBQAwMTEvMC0GA1UE\nAxMmc2VjdXJldG9rZW4uc3lzdGVtLmdzZXJ2aWNlYWNjb3VudC5jb20wHhcNMTcw\nMjAzMDA0NTI2WhcNMTcwMjA2MDExNTI2WjAxMS8wLQYDVQQDEyZzZWN1cmV0b2tl\nbi5zeXN0ZW0uZ3NlcnZpY2VhY2NvdW50LmNvbTCCASIwDQYJKoZIhvcNAQEBBQAD\nggEPADCCAQoCggEBAMQleufF/S68pypKqmggVFm+mPpg5kMXuXfm3R7ts1DzciR8\nNnKXs9IZioWF1E7P2kIOdU+evP40exhuK3mxmJD7tga5HfnsNu0A0qi/Qrnv2pSc\nVns7N8U/IeGH0JHKAt/yzqvqmAWB/P++HQilfDUAQtwperqO0cy6URlOmwaMRjHd\nNP1qKTrJb+4nUWhRHylAHu1Zsljmi2q3lbbWqFC/G8RBU0Z93yHmgyKQQcbBv6ii\nFfuq7l1IGaiKitFiq0T2GuUrpizxN2xcX+vVFxUsfCxtxp2PT3OTa9ZJXAeefyji\nuTw0oknEm725G4n8qlpKK3pRUBuYQjm18gUjNAMCAwEAAaM4MDYwDAYDVR0TAQH/\nBAIwADAOBgNVHQ8BAf8EBAMCB4AwFgYDVR0lAQH/BAwwCgYIKwYBBQUHAwIwDQYJ\nKoZIhvcNAQEFBQADggEBABhYOlbjqcHi7c7IQno2rSvIJY09K+U6vTHM7SRApApR\nqul0vwsN3/1DsTCjH3qgZeX6K0p9gB+0SHGS/KRgFX83YwInIGEiom+893vNR1Ld\nLH1EEOcxWyCflm9dMVO3GiCWi4MNrc/v1y1jFsB6eCwur5LgRW68PVLhbJBkqQTv\nJBC6FOAyMsniVE02UkSd3ReQ8hdgnfWnpb64GcaFQdpNjfroh45OF2Z2OGp5tWpP\nGJ7UQk6V1S7wuBzC0qFGAinHeaLLogyTrCnQ3qHAkrSLtp1znGQJaenQGCPSXJhl\nFjwVGf4KHqRG5zjK3+cDbJbc+rgQipJbEdyGxJGD1AY=\n-----END CERTIFICATE-----\n",
            'e04cec25d77acf4f6bd5c18dfa47268a9e14906a' => "-----BEGIN CERTIFICATE-----\nMIIDHDCCAgSgAwIBAgIITqMt1AB1xTEwDQYJKoZIhvcNAQEFBQAwMTEvMC0GA1UE\nAxMmc2VjdXJldG9rZW4uc3lzdGVtLmdzZXJ2aWNlYWNjb3VudC5jb20wHhcNMTcw\nMjA1MDA0NTI2WhcNMTcwMjA4MDExNTI2WjAxMS8wLQYDVQQDEyZzZWN1cmV0b2tl\nbi5zeXN0ZW0uZ3NlcnZpY2VhY2NvdW50LmNvbTCCASIwDQYJKoZIhvcNAQEBBQAD\nggEPADCCAQoCggEBALjR04aOmP7RhWnkvyZudkEFBJA21ikpI6+x8iciJtm4aVNQ\n2nwfGBVx26JnGTFgW70ipdNV8USkJwgcS1j3aF4rdvnGRD722ASuaAt4WkESIAsh\nuDreHjyPahCgjaEb4NCiVvOD+ZaQlWOCikcA6V4JRJrOqmfH/rfYLe4DYcpttjRy\n+fRCpKpMuHzMOi7mCjQa9G6/aqZFZyKk01r2a0Hs9u4P7bd2dZ8102VOQOuy+g9v\n6mI0yuAOiOSFvQJ/QvcdEeLUK2tQVNlIMyOy1TFDXBz6IrwHpc4paF+AJPoFXaEK\nONHjeljVmNY2otgJY07KoDGc4SrczQvWTQyIVf0CAwEAAaM4MDYwDAYDVR0TAQH/\nBAIwADAOBgNVHQ8BAf8EBAMCB4AwFgYDVR0lAQH/BAwwCgYIKwYBBQUHAwIwDQYJ\nKoZIhvcNAQEFBQADggEBAJ6cbxF7+3psvU4UsLBJg7OYhvo4hVnJpQKquYiioxQQ\nNj7jurXrUAzapaZfvAIO/pVxYbZEhdX6q3ZLZ6eFMaF4pwSPmLBJH00vHCFxJNvd\nfe6hIEzAknqA/wTVNP8+sRGAWpUASsDL29MRXtvb061unmqYWPTzGpm6txPgMp+k\n1XvY4G1vPjouAnkzAjeliyMAtsXaaWwufvs60FR+bB5dfC5Q3W148DBJJ1GUiH9T\nQzzk3MwAAADmdtKhI1lLowqZq83mx6xkvej21D04tdWhFN1PMCyXWpCC8/IReEJO\nWPUkEK5NfZPG0lI59xgIEYY39mgH0lVPwLtlYmFQ6QA=\n-----END CERTIFICATE-----\n",
        ]);
    }

    public function get($keyId)
    {
        return $this->keys->get($keyId);
    }
}