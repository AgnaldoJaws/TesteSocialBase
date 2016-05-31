<?php
namespace Application\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Date1
 *
 * @ORM\Table(name="date1")
 * @ORM\Entity
 */
class Categoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="data_valor", type="string", length=15, nullable=false)
     */
    private $dataValor;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $dataValor
     */
    public function setDataValor($dataValor)
    {
        $this->dataValor = $dataValor;
    }

    /**
     * @return mixed
     */
    public function getDataValor()
    {
        return $this->dataValor;
    }



}
