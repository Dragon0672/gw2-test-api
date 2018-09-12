<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 09/09/2018
 * Time: 19:28
 */

namespace AppBundle\Utils;


class GuildLogClass
{
    private $logId; // log.id
    private $user; // log.user
    private $type; // log.type
    private $motd; // log.motd
    private $upgradeId; // log.upgrade_id
    private $invitedBy; // log.invited_by
    private $kickedBy; // log.kicked_by
    private $operation; // log.operation
    private $action; // log.action
    private $count; // log.count
    private $itemId; // log.item_id
    private $coins; // log.coins
    private $time; // log.time
    private $name; // items.name
    private $rarity; // items.rarity
    private $chatLink; // items.chat_link
    private $icon;

    /**
     * @return mixed
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * @param mixed $logId
     */
    public function setLogId($logId)
    {
        $this->logId = $logId;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getMotd()
    {
        return $this->motd;
    }

    /**
     * @param mixed $motd
     */
    public function setMotd($motd)
    {
        $this->motd = $motd;
    }

    /**
     * @return mixed
     */
    public function getUpgradeId()
    {
        return $this->upgradeId;
    }

    /**
     * @param mixed $upgradeId
     */
    public function setUpgradeId($upgradeId)
    {
        $this->upgradeId = $upgradeId;
    }

    /**
     * @return mixed
     */
    public function getInvitedBy()
    {
        return $this->invitedBy;
    }

    /**
     * @param mixed $invitedBy
     */
    public function setInvitedBy($invitedBy)
    {
        $this->invitedBy = $invitedBy;
    }

    /**
     * @return mixed
     */
    public function getKickedBy()
    {
        return $this->kickedBy;
    }

    /**
     * @param mixed $kickedBy
     */
    public function setKickedBy($kickedBy)
    {
        $this->kickedBy = $kickedBy;
    }

    /**
     * @return mixed
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param mixed $operation
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param mixed $itemId
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * @return mixed
     */
    public function getCoins()
    {
        return $this->coins;
    }

    /**
     * @param mixed $coins
     */
    public function setCoins($coins)
    {
        $this->coins = $coins;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * @param mixed $rarity
     */
    public function setRarity($rarity)
    {
        $this->rarity = $rarity;
    }

    /**
     * @return mixed
     */
    public function getChatLink()
    {
        return $this->chatLink;
    }

    /**
     * @param mixed $chatLink
     */
    public function setChatLink($chatLink)
    {
        $this->chatLink = $chatLink;
    }

    /**
     * @return mixed
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    } // items.icon


}