<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $ID
 * @property string $userName
 * @property string $Password
 * @property string $Email
 * @property string|null $Role
 * @property \Cake\I18n\FrozenTime|null $Created
 * @property \Cake\I18n\FrozenTime|null $Modified
 */
class User extends Entity
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
        'ID' => true,
        'userName' => true,
        'Password' => true,
        'Email' => true,
        'Role' => true,
        'Created' => true,
        'Modified' => true,
    ];
}
