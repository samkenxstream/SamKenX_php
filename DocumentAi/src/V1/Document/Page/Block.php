<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A block has a set of lines (collected into paragraphs) that have a
 * common line-spacing and orientation.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Page.Block</code>
 */
class Block extends \Google\Protobuf\Internal\Message
{
    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [Block][google.cloud.documentai.v1.Document.Page.Block].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     */
    private $layout = null;
    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage detected_languages = 2;</code>
     */
    private $detected_languages;
    /**
     * The history of this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance provenance = 3;</code>
     */
    private $provenance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\Layout $layout
     *           [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [Block][google.cloud.documentai.v1.Document.Page.Block].
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $detected_languages
     *           A list of detected languages together with confidence.
     *     @type \Google\Cloud\DocumentAI\V1\Document\Provenance $provenance
     *           The history of this annotation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [Block][google.cloud.documentai.v1.Document.Page.Block].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Page\Layout|null
     */
    public function getLayout()
    {
        return $this->layout;
    }

    public function hasLayout()
    {
        return isset($this->layout);
    }

    public function clearLayout()
    {
        unset($this->layout);
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [Block][google.cloud.documentai.v1.Document.Page.Block].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Page\Layout $var
     * @return $this
     */
    public function setLayout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Page\Layout::class);
        $this->layout = $var;

        return $this;
    }

    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage detected_languages = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetectedLanguages()
    {
        return $this->detected_languages;
    }

    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage detected_languages = 2;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetectedLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage::class);
        $this->detected_languages = $arr;

        return $this;
    }

    /**
     * The history of this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance provenance = 3;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Provenance|null
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    public function hasProvenance()
    {
        return isset($this->provenance);
    }

    public function clearProvenance()
    {
        unset($this->provenance);
    }

    /**
     * The history of this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance provenance = 3;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Provenance $var
     * @return $this
     */
    public function setProvenance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Provenance::class);
        $this->provenance = $var;

        return $this;
    }

}


