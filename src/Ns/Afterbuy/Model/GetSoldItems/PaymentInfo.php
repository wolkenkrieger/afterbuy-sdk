<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractPaymentInfo;
use \DateTime;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class PaymentInfo
 */
class PaymentInfo extends AbstractPaymentInfo
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentID")
     * @var string
     */
    protected string $paymentId = '';

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentFunction")
     * @var string
     */
    protected string $paymentFunction = '';

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetSoldItems\PaymentData")
     * @Serializer\SerializedName("PaymentData")
     * @var PaymentData
     */
    protected PaymentData $paymentData;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentTransactionID")
     * @var string
     */
    protected string $paymentTransactionId = '';

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentStatus")
     * @var string
     */
    protected string $paymentStatus = '';

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("FullAmount")
     * @var FloatType
     */
    protected FloatType $fullAmount;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentInstruction")
     * @var string
     */
    protected string $paymentInstruction = '';

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("InvoiceDate")
     * @var DateTime
     */
    protected DateTime $invoiceDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EFTID")
     * @var string
     */
    protected string $eftid = '';
	
	/**
	 * @Serializer\Type("array<Ns\Afterbuy\Model\GetSoldItems\PayoutId>")
	 * @Serializer\XmlList(entry="PayoutId")
	 * @Serializer\SerializedName("PayoutIds")
	 * @var \Ns\Afterbuy\Model\GetSoldItems\PayoutId[]
	 */
	protected array $payoutIds;

    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @return string
     */
    public function getPaymentFunction()
    {
        return $this->paymentFunction;
    }

    /**
     * @return PaymentData
     */
    public function getPaymentData()
    {
        return $this->paymentData;
    }

    /**
     * @return string
     */
    public function getPaymentTransactionId()
    {
        return $this->paymentTransactionId;
    }

    /**
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * @return float
     */
    public function getFullAmount()
    {
        return $this->fullAmount->getValue();
    }

    /**
     * @return string
     */
    public function getPaymentInstruction()
    {
        return $this->paymentInstruction;
    }

    /**
     * @return DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * @return string
     */
    public function getEftid()
    {
        return $this->eftid;
    }
	
	/**
	 * @return \Ns\Afterbuy\Model\GetSoldItems\PayoutId[]
	 */
	public function getPayoutIds(): array
	{
		return $this->payoutIds;
	}
}
