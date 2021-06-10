<?php 
ini_set("display_errors", "On");

class Address
{

    private string $number;
    private string $street;

    public function __construct(string $maybenumber, string $maybestreet = null)
    {
        if(is_null($maybestreet)) {
            $this->streetaddress = $maybenumber;
        } else {
            $this->number = $maybenumber;
            $this->street = $maybestreet;
        }
    }

    public function __set(string $property, mixed $value): void 
    {
        if($property === "streetaddress") {
            if(preg_match("/^(\d+.*?)[\s,]+(.+)$/", $value, $matches)) {
                $this->number = $matches[1];
                $this->street = $matches[2];
            } else {
                throw new \Exception("Unable to parse street address: '{$value}'");
            }
        }
    }

    public function __get(string $property): mixed 
    {
        if($property === "streetaddress") {
            return $this->number . " " . $this->street;
        }
    }

}

echo "<pre>";
$address = new Address("441b Bakers Street");
print_r($address);
echo "</pre>";






