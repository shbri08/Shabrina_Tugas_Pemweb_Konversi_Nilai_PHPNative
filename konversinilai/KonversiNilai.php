<?php
class KonversiNilai
{
    public static function konversi($na)
    {
        if ($na !== null) {
            if ($na >= 85 && $na <= 100) {
                return 'A';
            } elseif ($na >= 80) {
                return 'AB';
            } elseif ($na >= 70) {
                return 'B';
            } elseif ($na >= 60) {
                return 'BC';
            } elseif ($na >= 50) {
                return 'C';
            } elseif ($na >= 40) {
                return 'D';
            } else {
                return 'E';
            }
        } else {
            return null;
        }
    }
}
?>
