<?php
namespace YourFate\YourFateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="yf_payments")
 */
class Payments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(name="amount", type="decimal", scale=2)
     */
    protected $amount;

    /**
     * @ORM\Column(name="payment_owner", type="integer")
     */
    protected $paymentOwner;
    
    /**
     * @ORM\Column(name="payment_status", type="integer")
     */
    protected $paymentStatus;
    
    /**
     * @ORM\Column(name="payment_date", type="integer")
     */
    protected $paymentDate;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return Payments
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set paymentOwner
     *
     * @param integer $paymentOwner
     * @return Payments
     */
    public function setPaymentOwner($paymentOwner)
    {
        $this->paymentOwner = $paymentOwner;

        return $this;
    }

    /**
     * Get paymentOwner
     *
     * @return integer 
     */
    public function getPaymentOwner()
    {
        return $this->paymentOwner;
    }

    /**
     * Set paymentStatus
     *
     * @param integer $paymentStatus
     * @return Payments
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * Get paymentStatus
     *
     * @return integer 
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Set paymentDate
     *
     * @param integer $paymentDate
     * @return Payments
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return integer 
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }
}
