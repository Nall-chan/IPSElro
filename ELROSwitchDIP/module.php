<?

require_once(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "ELROBase.php");  // ELROBase Klasse

class ELROSwitchDIP extends ELROBase
{

    const on = '5';
    const off = '4';

    public function Create()
    {
        parent::Create();
        $this->RegisterPropertyBoolean("Bit0", false);
        $this->RegisterPropertyBoolean("Bit1", false);
        $this->RegisterPropertyBoolean("Bit2", false);
        $this->RegisterPropertyBoolean("Bit3", false);
        $this->RegisterPropertyBoolean("Bit4", false);
        $this->RegisterPropertyBoolean("Bit5", false);
        $this->RegisterPropertyBoolean("Bit6", false);
        $this->RegisterPropertyBoolean("Bit7", false);
        $this->RegisterPropertyBoolean("Bit8", false);
        $this->RegisterPropertyBoolean("Bit9", false);
        $this->RegisterPropertyInteger("Repeat", 2);
    }

    public function ApplyChanges()
    {
        parent::ApplyChanges();
    }

    protected function GetAdress()
    {
        $Adresse = 0;
        if (!$this->ReadPropertyBoolean("Bit0"))
            $Adresse = 1;
        if (!$this->ReadPropertyBoolean("Bit1"))
            $Adresse+=4;
        $Target = dechex($Adresse);
        $Adresse = 0;
        if (!$this->ReadPropertyBoolean("Bit2"))
            $Adresse = 1;
        if (!$this->ReadPropertyBoolean("Bit3"))
            $Adresse+=4;
        $Target.=dechex($Adresse);
        $Adresse = 0;
        if (!$this->ReadPropertyBoolean("Bit4"))
            $Adresse = 1;
        if (!$this->ReadPropertyBoolean("Bit5"))
            $Adresse+=4;
        $Target.=dechex($Adresse);
        $Adresse = 0;
        if (!$this->ReadPropertyBoolean("Bit6"))
            $Adresse = 1;
        if (!$this->ReadPropertyBoolean("Bit7"))
            $Adresse+=4;
        $Target.=dechex($Adresse);
        $Adresse = 0;
        if (!$this->ReadPropertyBoolean("Bit8"))
            $Adresse = 1;
        if (!$this->ReadPropertyBoolean("Bit9"))
            $Adresse+=4;
        $Target.=dechex($Adresse);
        return $Target;
    }

    public function SendSwitch(boolean $State)
    {
        parent::SendSwitch($State);
    }

    public function SendSwitchDIP(boolean $State)
    {
        parent::SendSwitch($State);
    }

}

?>