<?php

//use Sunnysideup\SiteTreeCanEdit\Model\Traits\SiteTreeCanEdit;

namespace Sunnysideup\SiteTreeCanEdit\Traits;

use SilverStripe\Security\Permission;

Trait SiteTreeCanEdit
{
    public function canView($member = null)
    {
        return true;
    }

    public function canEdit($member = null)
    {
        $extended = $this->extendedCan(__FUNCTION__, $member);
        if ($extended !== null) {
            return $extended;
        }

        return Permission::check('SITETREE_EDIT_ALL');
    }

    public function canDelete($member = null)
    {
        $extended = $this->extendedCan(__FUNCTION__, $member);
        if ($extended !== null) {
            return $extended;
        }

        return Permission::check('SITETREE_EDIT_ALL');
    }

    public function canCreate($member = null, $context = array())
    {
        $extended = $this->extendedCan(__FUNCTION__, $member);
        if ($extended !== null) {
            return $extended;
        }

        return Permission::check('SITETREE_EDIT_ALL');
    }
}
