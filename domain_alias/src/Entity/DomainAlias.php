<?php

/**
 * @file
 * Definition of Drupal\domain_alias\Entity\DomainAlias.
 */

namespace Drupal\domain_alias\Entity;

use Drupal\domain_alias\DomainAliasInterface;

use Drupal\Core\Config\Entity\ConfigEntityStorage;
use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Entity\EntityStorageInterface;

/**
 * Defines the domain alias entity.
 *
 * @ConfigEntityType(
 *   id = "domain_alias",
 *   label = @Translation("Domain alias"),
 *   module = "domain_alias",
 *   handlers = {
 *     "storage" = "Drupal\Core\Config\Entity\ConfigEntityStorage",
 *     "access" = "Drupal\domain\DomainAccessControlHandler",
 *     "list_builder" = "Drupal\domain_alias\DomainAliasListBuilder",
 *     "form" = {
 *       "default" = "Drupal\domain_alias\DomainAliasForm",
 *       "edit" = "Drupal\domain_alias\DomainAliasForm",
 *       "delete" = "Drupal\domain_alias\Form\DomainAliasDeleteForm"
 *     }
 *   },
 *   config_prefix = "alias",
 *   admin_permission = "administer domains",
 *   entity_keys = {
 *     "id" = "id",
 *     "domain_id" = "domain_id",
 *     "label" = "pattern",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "delete-form" = "domain_alias.delete",
 *     "edit-form" = "domain_alias.edit"
 *   }
 * )
 */
class DomainAlias extends ConfigEntityBase implements DomainAliasInterface {

  /**
   * The ID of the domain alias entity.
   *
   * @var string
   */
  public $id;

  /**
   * The parent domain record ID.
   *
   * @var string
   */
  public $domain_id;

  /**
   * The domain alias record UUID.
   *
   * @var string
   */
  public $uuid;

  /**
   * The domain alias record pattern.
   *
   * @var string
   */
  public $pattern;

  /**
   * The domain alias record redirect value.
   *
   * @var integer
   */
  public $redirect;

}
