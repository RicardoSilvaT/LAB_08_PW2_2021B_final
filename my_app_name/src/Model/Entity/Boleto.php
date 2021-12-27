<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Boleto Entity
 *
 * @property string|null $lastName
 * @property string|null $firsName
 * @property string|null $username
 * @property string|null $email
 * @property string|null $adress
 * @property string|null $adress2
 * @property int $id
 */
class Boleto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'lastName' => true,
        'firsName' => true,
        'username' => true,
        'email' => true,
        'adress' => true,
        'adress2' => true,
    ];
}
