<?php
/***********************************************************************/
/** \file   c_comdef_users.class.php
    \brief The file for the c_comdef_users class.

    This file is part of the Basic Meeting List Toolbox (BMLT).

    Find out more at: https://bmlt.app

    BMLT is free software: you can redistribute it and/or modify
    it under the terms of the MIT License.

    BMLT is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    MIT License for more details.

    You should have received a copy of the MIT License along with this code.
    If not, see <https://opensource.org/licenses/MIT>.
*/
defined('BMLT_EXEC') or die('Cannot Execute Directly');    // Makes sure that this file is in the correct context.

require_once(dirname(__FILE__)."/c_comdef_user.class.php");

/***********************************************************************/
/** \class c_comdef_users
    \brief  A class to hold a collection of c_comdef_users objects.

***********************************************************************/
// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
// phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
class c_comdef_users implements i_comdef_has_parent
// phpcs:enable PSR1.Classes.ClassDeclaration.MissingNamespace
// phpcs:enable Squiz.Classes.ValidClassName.NotCamelCaps
{
    /// This is the parent (container) object that holds this instance.
    private $_local_id_parent_obj = null;
    
    /*******************************************************************/
    /** We keep a local copy of the simple array, because we can instantly
        access it, as opposed to having to instantiate iterators.
    */
    private $_local_copy_of_array = null;

    public function __construct(
        $in_parent_object,      ///< A reference to the object that "owns" this instance.
        $in_user_object_array   ///< An array of references to c_comdef_user objects, to be stored as local references.
    ) {
        $this->SetParentObj($in_parent_object);
        
        foreach ($in_user_object_array as &$obj) {
            // Who's yer daddy?
            $obj->SetParentObj($this);
        }

        $this->_local_copy_of_array = $in_user_object_array;
    }
    
    /*******************************************************************/
    /** \brief Set the parent object of this instance.
    */
    // phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    public function SetParentObj(
        $in_parent_obj  ///< A reference to the parent object.
    ) {
        // phpcs:enable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
        $this->_local_id_parent_obj = null;
        $this->_local_id_parent_obj = $in_parent_obj;
    }
    
    /*******************************************************************/
    /** \brief Return a reference to the parent object of this instance.

        \returns a reference to the parent instance of the object.
    */
    // phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    public function GetParentObj()
    {
        // phpcs:enable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
        return $this->_local_id_parent_obj;
    }

    /*******************************************************************/
    /** \brief Accessor -Get the user object array.

        \returns a reference to an array of c_comdef_user objects.
    */
    // phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    public function &GetUsersArray()
    {
        // phpcs:enable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
        return $this->_local_copy_of_array;
    }

    /*******************************************************************/
    /** \brief Accessor -Get the user object for one user, given an ID.

        \returns a reference to a c_comdef_user object. Null if none.
    */
    // phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    public function &GetUserByID(
        $in_user_id ///< An integer -The ID of the user.
    ) {
        // phpcs:enable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
        $ret = null;
        
        foreach ($this->_local_copy_of_array as &$user) {
            if ($in_user_id == $user->GetID()) {
                $ret = $user;
                break;
            }
        }
        
        return $ret;
    }

    /*******************************************************************/
    /** \brief Given a login and password, looks up the user, and returns
        an encrypted password for that user.

        \returns a string, with the encrypted password. Null if none.
    */
    // phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    public function &GetEncryptedPW(
        $in_login,      ///< A string. The login ID.
        $in_password    ///< A string. the UNENCRYPTED password for the user.
    ) {
        // phpcs:enable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
        $ret = null;
        
        foreach ($this->_local_copy_of_array as $user) {
            $previous_password = $user->GetPassword();
            $login = $user->GetLogin();
            if (($in_login == $login) && password_verify($in_password, $previous_password)) {
                $ret = $previous_password;
                break;
            }
        }
        
        return $ret;
    }

    /*******************************************************************/
    /** \brief Given a login, looks up the user, and returns
        a reference to that user object.

        \returns a reference to a c_comdef_user object. Null if none.
    */
    // phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    public function &GetUserByLogin(
        $in_login       ///< A string. The login ID.
    ) {
        // phpcs:enable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
        $ret = null;
        
        foreach ($this->_local_copy_of_array as &$user) {
            if (($in_login == $user->GetLogin())) {
                $ret = $user;
                break;
            }
        }
        
        return $ret;
    }

    /*******************************************************************/
    /** \brief Given a login and password, looks up the user, and returns
        a reference to that user object.

        \returns a reference to a c_comdef_user object. Null if none.
    */
    // phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    public function &GetUserByLoginCredentials(
        $in_login,      ///< A string. The login ID.
        $in_password    ///< A string. the ENCRYPTED password for the user.
    ) {
        // phpcs:enable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
        $ret = null;
        
        foreach ($this->_local_copy_of_array as &$user) {
            if (($in_login == $user->GetLogin()) && ($in_password == $user->GetPassword())) {
                if (($in_login == $user->GetLogin()) && ($in_password == $user->GetPassword())) {
                    $ret = $user;
                }
                break;
            }
        }
        
        return $ret;
    }

    /*******************************************************************/
    /** \brief Accessor -Get the user object for the Server Admin (User ID 1).

        \returns a reference to a c_comdef_user object for the server admin.
    */
    // phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    public function &GetServerAdminObj()
    {
        // phpcs:enable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
        return $this->_local_copy_of_array[1];
    }

    /*******************************************************************/
    /** \brief Add a user object to the end of the array.
    */
    // phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    public function AddUser(
        &$in_user   ///< A reference to the user to be added.
    ) {
        // phpcs:enable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
        if ($in_user instanceof c_comdef_user) {
            $in_user->SetParentObj($this);
            array_push($this->_local_copy_of_array, $in_user);
        }
    }
}
