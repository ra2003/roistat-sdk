<?php
/**
 * @author Vladislav Alatorcev(Dangetsu) <clannad.business@gmail.com>
 */

namespace Analytics\Entity\Analytics\Source;

use Analytics\Entity;
use Analytics\Scheme;

/**
 * @property Scheme\Analytics\Source\Cost $_scheme
 * @method string getSource()
 * @method string getName()
 * @method string getFromDate()
 * @method string getToDate()
 * @method string getTimezone()
 * @method int getMarketingCost()
 * @method Cost setSource(string $source)
 * @method Cost setName(string $name)
 * @method Cost setFromDate(string $fromDate)
 * @method Cost setToDate(string $toDate)
 * @method Cost setTimezone(string $timezone)
 * @method Cost setMarketingCost(int $marketingCost)
 */
class Cost extends Entity\AbstractEntity {

    /** @var string */
    protected $source;

    /** @var string */
    protected $name;

    /** @var string */
    protected $from_date;

    /** @var string */
    protected $to_date;

    /** @var string */
    protected $timezone;

    /** @var int */
    protected $marketing_cost;

    /**
     * @return bool
     */
    public function update() {
        return $this->_scheme->update($this);
    }

    /**
     * @return bool
     */
    public function delete() {
        return $this->_scheme->delete($this->getId());
    }
}