<?php

namespace App\Enums;


/**
 * Enum RoleEnum
 *
 * This enum represents different roles within the application.
 *
 * @package App\Enums
 */
enum RoleEnum: string
{
    case ROLE_SUPER_ADMIN = 'super admin';
    case ROLE_ADMIN = 'admin';
    case ROLE_ACCOUNT = 'account';

    /**
     * Return an array of all roles.
     *
     * @return array
     */
    public static function all(): array
    {
        return [
            self::ROLE_SUPER_ADMIN,
            self::ROLE_ADMIN,
            self::ROLE_ACCOUNT,
        ];
    }

    /**
     * Return an array of all roles values.
     *
     * @return array
     */
    public static function values(): array
    {
        return array_map(fn(self $role) => $role->value, self::all());
    }

    /**
     * Return an array of all roles labels.
     *
     * @return array
     */
    public static function labels(): array
    {
        return array_map(fn(self $role) => $role->name, self::all());
    }

    /**
     * Return an array of all roles options.
     *
     * @return array
     */
    public static function options(): array
    {
        return array_map(fn(self $role) => ['value' => $role->value, 'label' => $role->name], self::all());
    }

    /**
     * Return an array of all roles names.
     *
     * @return array
     */
    public static function names(): array
    {
        return array_map(fn(self $role) => $role->name, self::all());
    }


    /**
     * Get a role by its value.
     *
     * @param string $value
     * @return static|null
     */
    public static function fromValue(string $value): ?self
    {
        $roles = array_filter(self::all(), fn(self $role) => $role->value === $value);
        return reset($roles);
    }


    /**
     * Get a role by its label.
     *
     * @param string $label
     * @return static|null
     */

    public static function fromLabel(string $label): ?self
    {
        $roles = array_filter(self::all(), fn(self $role) => $role->name === $label);
        return reset($roles);
    }


    /**
     * Get a role by its value from an option array.
     *
     * @param array $option
     * @return static|null
     */
    public static function fromOption(array $option): ?self
    {
        $roles = array_filter(self::all(), fn(self $role) => $role->value === $option['value']);
        return reset($roles);
    }


    /**
     * Get the label of the role.
     *
     * @return string
     */
    public function label(): string
    {
        return $this->name;
    }

    /**
     * Get the value of the role.
     *
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }


    /**
     * Return the role as an option array.
     *
     * @return array<string, string>
     */
    public function option(): array
    {
        return ['value' => $this->value, 'label' => $this->name];
    }

    /**
     * Return the role as an array.
     *
     * @return array<string, string>
     */
    public function toArray(): array
    {
        return ['value' => $this->value, 'label' => $this->name];
    }
}
