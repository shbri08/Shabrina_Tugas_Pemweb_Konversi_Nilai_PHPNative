<?php
class Nilai
{
    private $partisipasi;
    private $tugas;
    private $uts;
    private $uas;

    public function __construct($partisipasi, $tugas, $uts, $uas)
    {
        $this->partisipasi = $partisipasi;
        $this->tugas = $tugas;
        $this->uts = $uts;
        $this->uas = $uas;
    }

    public function hitungNA()
    {
        return ($this->partisipasi * 0.2) + ($this->tugas * 0.3) + ($this->uts * 0.25) + ($this->uas * 0.25);
    }
}
?>
