<?php

namespace Justijndepover\SimpleVatChecker;

class VatChecker
{
    public static function validate(string $vatNumber)
    {
        // België
        if (preg_match('/^BE(0[0-9]{7})([0-9]{2})$/', $vatNumber, $matches)) {
            $result = 97 - ($matches[1] - round($matches[1] / 97) * 97);

            if ($result == $matches[2]) {
                return true;
            } else {
                return false;
            }
        }

        // Nederland
        if (preg_match('/^NL[0-9]{9}B[0-9]{2}$/', $vatNumber)) {
            return true;
        }

        // Frankrijk
        if (preg_match('/^FR[A-Z0-9]{2}(\s)?[0-9]{9}$/', $vatNumber)) {
            return true;
        }

        // Bulgarije
        if (preg_match('/^BG[0-9]{9,10}$/', $vatNumber)) {
            return true;
        }

        // Cyprus
        if (preg_match('/^CY[0-9]{8}[A-Z]{1}$/', $vatNumber)) {
            return true;
        }

        // Denemarken
        if (preg_match('/^DK[0-9]{2}(\s)?[0-9]{2}(\s)?[0-9]{2}(\s)?[0-9]{2}$/', $vatNumber)) {
            return true;
        }

        // Duitsland
        if (preg_match('/^DE[0-9]{9}$/', $vatNumber)) {
            return true;
        }

        // Estland
        if (preg_match('/^EE[0-9]{9}$/', $vatNumber)) {
            return true;
        }

        // Finland
        if (preg_match('/^FI[0-9]{8}$/', $vatNumber)) {
            return true;
        }

        // Griekenland
        if (preg_match('/^EL[0-9]{9}$/', $vatNumber)) {
            return true;
        }

        // Hongarije
        if (preg_match('/^HU[0-9]{8}$/', $vatNumber)) {
            return true;
        }

        // Ierland
        if (preg_match('/^IE[0-9]{1}[0-9A-Z\+\*]{1}[0-9]{5}[A-Z]{1}$/', $vatNumber)) {
            return true;
        }

        // Italië
        if (preg_match('/^IT[0-9]{11}$/', $vatNumber)) {
            return true;
        }

        // Kroatië
        // Letland
        if (preg_match('/^LV[0-9]{11}$/', $vatNumber)) {
            return true;
        }

        // Litouwen
        if (preg_match('/^LT[0-9]{9}$/', $vatNumber)) {
            return true;
        }
        if (preg_match('/^LT[0-9]{12}$/', $vatNumber)) {
            return true;
        }

        // Malta
        if (preg_match('/^MT[0-9]{8}$/', $vatNumber)) {
            return true;
        }

        // Oostenrijk
        if (preg_match('/^ATU[0-9]{8}$/', $vatNumber)) {
            return true;
        }

        // Polen
        if (preg_match('/^PL[0-9]{10}$/', $vatNumber)) {
            return true;
        }

        // Portugal
        if (preg_match('/^PT[0-9]{9}$/', $vatNumber)) {
            return true;
        }

        // Roemenië
        if (preg_match('/^RO[0-9]{2,10}$/', $vatNumber)) {
            return true;
        }

        // Slovenië
        if (preg_match('/^SI[0-9]{8}$/', $vatNumber)) {
            return true;
        }

        // Slowakije
        if (preg_match('/^SK[0-9]{10}$/', $vatNumber)) {
            return true;
        }

        // Spanje
        if (preg_match('/^ES[0-9A-Z]{1}[0-9]{7}[0-9A-Z]{1}$/', $vatNumber)) {
            return true;
        }

        // Tsjechië
        if (preg_match('/^CZ[0-9]{8,10}$/', $vatNumber)) {
            return true;
        }

        // Zweden
        if (preg_match('/^SE[0-9]{12}$/', $vatNumber)) {
            return true;
        }

        return false;
    }
}
