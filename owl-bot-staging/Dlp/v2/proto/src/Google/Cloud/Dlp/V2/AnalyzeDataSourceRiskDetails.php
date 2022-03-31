<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result of a risk analysis operation request.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails</code>
 */
class AnalyzeDataSourceRiskDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Privacy metric to compute.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PrivacyMetric requested_privacy_metric = 1;</code>
     */
    protected $requested_privacy_metric = null;
    /**
     * Input dataset to compute metrics over.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable requested_source_table = 2;</code>
     */
    protected $requested_source_table = null;
    /**
     * The configuration used for this job.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.RequestedRiskAnalysisOptions requested_options = 10;</code>
     */
    protected $requested_options = null;
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\PrivacyMetric $requested_privacy_metric
     *           Privacy metric to compute.
     *     @type \Google\Cloud\Dlp\V2\BigQueryTable $requested_source_table
     *           Input dataset to compute metrics over.
     *     @type \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\NumericalStatsResult $numerical_stats_result
     *           Numerical stats result
     *     @type \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\CategoricalStatsResult $categorical_stats_result
     *           Categorical stats result
     *     @type \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KAnonymityResult $k_anonymity_result
     *           K-anonymity result
     *     @type \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\LDiversityResult $l_diversity_result
     *           L-divesity result
     *     @type \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KMapEstimationResult $k_map_estimation_result
     *           K-map result
     *     @type \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\DeltaPresenceEstimationResult $delta_presence_estimation_result
     *           Delta-presence result
     *     @type \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\RequestedRiskAnalysisOptions $requested_options
     *           The configuration used for this job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Privacy metric to compute.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PrivacyMetric requested_privacy_metric = 1;</code>
     * @return \Google\Cloud\Dlp\V2\PrivacyMetric|null
     */
    public function getRequestedPrivacyMetric()
    {
        return $this->requested_privacy_metric;
    }

    public function hasRequestedPrivacyMetric()
    {
        return isset($this->requested_privacy_metric);
    }

    public function clearRequestedPrivacyMetric()
    {
        unset($this->requested_privacy_metric);
    }

    /**
     * Privacy metric to compute.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PrivacyMetric requested_privacy_metric = 1;</code>
     * @param \Google\Cloud\Dlp\V2\PrivacyMetric $var
     * @return $this
     */
    public function setRequestedPrivacyMetric($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\PrivacyMetric::class);
        $this->requested_privacy_metric = $var;

        return $this;
    }

    /**
     * Input dataset to compute metrics over.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable requested_source_table = 2;</code>
     * @return \Google\Cloud\Dlp\V2\BigQueryTable|null
     */
    public function getRequestedSourceTable()
    {
        return $this->requested_source_table;
    }

    public function hasRequestedSourceTable()
    {
        return isset($this->requested_source_table);
    }

    public function clearRequestedSourceTable()
    {
        unset($this->requested_source_table);
    }

    /**
     * Input dataset to compute metrics over.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable requested_source_table = 2;</code>
     * @param \Google\Cloud\Dlp\V2\BigQueryTable $var
     * @return $this
     */
    public function setRequestedSourceTable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\BigQueryTable::class);
        $this->requested_source_table = $var;

        return $this;
    }

    /**
     * Numerical stats result
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.NumericalStatsResult numerical_stats_result = 3;</code>
     * @return \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\NumericalStatsResult|null
     */
    public function getNumericalStatsResult()
    {
        return $this->readOneof(3);
    }

    public function hasNumericalStatsResult()
    {
        return $this->hasOneof(3);
    }

    /**
     * Numerical stats result
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.NumericalStatsResult numerical_stats_result = 3;</code>
     * @param \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\NumericalStatsResult $var
     * @return $this
     */
    public function setNumericalStatsResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\NumericalStatsResult::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Categorical stats result
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.CategoricalStatsResult categorical_stats_result = 4;</code>
     * @return \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\CategoricalStatsResult|null
     */
    public function getCategoricalStatsResult()
    {
        return $this->readOneof(4);
    }

    public function hasCategoricalStatsResult()
    {
        return $this->hasOneof(4);
    }

    /**
     * Categorical stats result
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.CategoricalStatsResult categorical_stats_result = 4;</code>
     * @param \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\CategoricalStatsResult $var
     * @return $this
     */
    public function setCategoricalStatsResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\CategoricalStatsResult::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * K-anonymity result
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.KAnonymityResult k_anonymity_result = 5;</code>
     * @return \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KAnonymityResult|null
     */
    public function getKAnonymityResult()
    {
        return $this->readOneof(5);
    }

    public function hasKAnonymityResult()
    {
        return $this->hasOneof(5);
    }

    /**
     * K-anonymity result
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.KAnonymityResult k_anonymity_result = 5;</code>
     * @param \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KAnonymityResult $var
     * @return $this
     */
    public function setKAnonymityResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KAnonymityResult::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * L-divesity result
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.LDiversityResult l_diversity_result = 6;</code>
     * @return \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\LDiversityResult|null
     */
    public function getLDiversityResult()
    {
        return $this->readOneof(6);
    }

    public function hasLDiversityResult()
    {
        return $this->hasOneof(6);
    }

    /**
     * L-divesity result
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.LDiversityResult l_diversity_result = 6;</code>
     * @param \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\LDiversityResult $var
     * @return $this
     */
    public function setLDiversityResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\LDiversityResult::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * K-map result
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.KMapEstimationResult k_map_estimation_result = 7;</code>
     * @return \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KMapEstimationResult|null
     */
    public function getKMapEstimationResult()
    {
        return $this->readOneof(7);
    }

    public function hasKMapEstimationResult()
    {
        return $this->hasOneof(7);
    }

    /**
     * K-map result
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.KMapEstimationResult k_map_estimation_result = 7;</code>
     * @param \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KMapEstimationResult $var
     * @return $this
     */
    public function setKMapEstimationResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KMapEstimationResult::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Delta-presence result
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.DeltaPresenceEstimationResult delta_presence_estimation_result = 9;</code>
     * @return \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\DeltaPresenceEstimationResult|null
     */
    public function getDeltaPresenceEstimationResult()
    {
        return $this->readOneof(9);
    }

    public function hasDeltaPresenceEstimationResult()
    {
        return $this->hasOneof(9);
    }

    /**
     * Delta-presence result
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.DeltaPresenceEstimationResult delta_presence_estimation_result = 9;</code>
     * @param \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\DeltaPresenceEstimationResult $var
     * @return $this
     */
    public function setDeltaPresenceEstimationResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\DeltaPresenceEstimationResult::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * The configuration used for this job.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.RequestedRiskAnalysisOptions requested_options = 10;</code>
     * @return \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\RequestedRiskAnalysisOptions|null
     */
    public function getRequestedOptions()
    {
        return $this->requested_options;
    }

    public function hasRequestedOptions()
    {
        return isset($this->requested_options);
    }

    public function clearRequestedOptions()
    {
        unset($this->requested_options);
    }

    /**
     * The configuration used for this job.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.RequestedRiskAnalysisOptions requested_options = 10;</code>
     * @param \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\RequestedRiskAnalysisOptions $var
     * @return $this
     */
    public function setRequestedOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\RequestedRiskAnalysisOptions::class);
        $this->requested_options = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}

