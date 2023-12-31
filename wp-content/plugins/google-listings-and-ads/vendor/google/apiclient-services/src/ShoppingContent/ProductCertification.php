<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent;

class ProductCertification extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Model
{
  /**
   * @var string
   */
  public $certificationAuthority;
  /**
   * @var string
   */
  public $certificationCode;
  /**
   * @var string
   */
  public $certificationName;

  /**
   * @param string
   */
  public function setCertificationAuthority($certificationAuthority)
  {
    $this->certificationAuthority = $certificationAuthority;
  }
  /**
   * @return string
   */
  public function getCertificationAuthority()
  {
    return $this->certificationAuthority;
  }
  /**
   * @param string
   */
  public function setCertificationCode($certificationCode)
  {
    $this->certificationCode = $certificationCode;
  }
  /**
   * @return string
   */
  public function getCertificationCode()
  {
    return $this->certificationCode;
  }
  /**
   * @param string
   */
  public function setCertificationName($certificationName)
  {
    $this->certificationName = $certificationName;
  }
  /**
   * @return string
   */
  public function getCertificationName()
  {
    return $this->certificationName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductCertification::class, 'Google_Service_ShoppingContent_ProductCertification');
