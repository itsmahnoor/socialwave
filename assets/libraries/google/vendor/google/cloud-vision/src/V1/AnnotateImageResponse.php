<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to an image annotation request.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.AnnotateImageResponse</code>
 */
class AnnotateImageResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * If present, face detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.FaceAnnotation face_annotations = 1;</code>
     */
    private $face_annotations;
    /**
     * If present, landmark detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation landmark_annotations = 2;</code>
     */
    private $landmark_annotations;
    /**
     * If present, logo detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation logo_annotations = 3;</code>
     */
    private $logo_annotations;
    /**
     * If present, label detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation label_annotations = 4;</code>
     */
    private $label_annotations;
    /**
     * If present, localized object detection has completed successfully.
     * This will be sorted descending by confidence score.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.LocalizedObjectAnnotation localized_object_annotations = 22;</code>
     */
    private $localized_object_annotations;
    /**
     * If present, text (OCR) detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation text_annotations = 5;</code>
     */
    private $text_annotations;
    /**
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     * This annotation provides the structural hierarchy for the OCR detected
     * text.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation full_text_annotation = 12;</code>
     */
    private $full_text_annotation = null;
    /**
     * If present, safe-search annotation has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.SafeSearchAnnotation safe_search_annotation = 6;</code>
     */
    private $safe_search_annotation = null;
    /**
     * If present, image properties were extracted successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageProperties image_properties_annotation = 8;</code>
     */
    private $image_properties_annotation = null;
    /**
     * If present, crop hints have completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.CropHintsAnnotation crop_hints_annotation = 11;</code>
     */
    private $crop_hints_annotation = null;
    /**
     * If present, web detection has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.WebDetection web_detection = 13;</code>
     */
    private $web_detection = null;
    /**
     * If present, product search has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ProductSearchResults product_search_results = 14;</code>
     */
    private $product_search_results = null;
    /**
     * If set, represents the error message for the operation.
     * Note that filled-in image annotations are guaranteed to be
     * correct, even when `error` is set.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 9;</code>
     */
    private $error = null;
    /**
     * If present, contextual information is needed to understand where this image
     * comes from.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageAnnotationContext context = 21;</code>
     */
    private $context = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\FaceAnnotation[]|\Google\Protobuf\Internal\RepeatedField $face_annotations
     *           If present, face detection has completed successfully.
     *     @type \Google\Cloud\Vision\V1\EntityAnnotation[]|\Google\Protobuf\Internal\RepeatedField $landmark_annotations
     *           If present, landmark detection has completed successfully.
     *     @type \Google\Cloud\Vision\V1\EntityAnnotation[]|\Google\Protobuf\Internal\RepeatedField $logo_annotations
     *           If present, logo detection has completed successfully.
     *     @type \Google\Cloud\Vision\V1\EntityAnnotation[]|\Google\Protobuf\Internal\RepeatedField $label_annotations
     *           If present, label detection has completed successfully.
     *     @type \Google\Cloud\Vision\V1\LocalizedObjectAnnotation[]|\Google\Protobuf\Internal\RepeatedField $localized_object_annotations
     *           If present, localized object detection has completed successfully.
     *           This will be sorted descending by confidence score.
     *     @type \Google\Cloud\Vision\V1\EntityAnnotation[]|\Google\Protobuf\Internal\RepeatedField $text_annotations
     *           If present, text (OCR) detection has completed successfully.
     *     @type \Google\Cloud\Vision\V1\TextAnnotation $full_text_annotation
     *           If present, text (OCR) detection or document (OCR) text detection has
     *           completed successfully.
     *           This annotation provides the structural hierarchy for the OCR detected
     *           text.
     *     @type \Google\Cloud\Vision\V1\SafeSearchAnnotation $safe_search_annotation
     *           If present, safe-search annotation has completed successfully.
     *     @type \Google\Cloud\Vision\V1\ImageProperties $image_properties_annotation
     *           If present, image properties were extracted successfully.
     *     @type \Google\Cloud\Vision\V1\CropHintsAnnotation $crop_hints_annotation
     *           If present, crop hints have completed successfully.
     *     @type \Google\Cloud\Vision\V1\WebDetection $web_detection
     *           If present, web detection has completed successfully.
     *     @type \Google\Cloud\Vision\V1\ProductSearchResults $product_search_results
     *           If present, product search has completed successfully.
     *     @type \Google\Rpc\Status $error
     *           If set, represents the error message for the operation.
     *           Note that filled-in image annotations are guaranteed to be
     *           correct, even when `error` is set.
     *     @type \Google\Cloud\Vision\V1\ImageAnnotationContext $context
     *           If present, contextual information is needed to understand where this image
     *           comes from.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * If present, face detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.FaceAnnotation face_annotations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFaceAnnotations()
    {
        return $this->face_annotations;
    }

    /**
     * If present, face detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.FaceAnnotation face_annotations = 1;</code>
     * @param \Google\Cloud\Vision\V1\FaceAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFaceAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\FaceAnnotation::class);
        $this->face_annotations = $arr;

        return $this;
    }

    /**
     * If present, landmark detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation landmark_annotations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLandmarkAnnotations()
    {
        return $this->landmark_annotations;
    }

    /**
     * If present, landmark detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation landmark_annotations = 2;</code>
     * @param \Google\Cloud\Vision\V1\EntityAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLandmarkAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\EntityAnnotation::class);
        $this->landmark_annotations = $arr;

        return $this;
    }

    /**
     * If present, logo detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation logo_annotations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogoAnnotations()
    {
        return $this->logo_annotations;
    }

    /**
     * If present, logo detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation logo_annotations = 3;</code>
     * @param \Google\Cloud\Vision\V1\EntityAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogoAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\EntityAnnotation::class);
        $this->logo_annotations = $arr;

        return $this;
    }

    /**
     * If present, label detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation label_annotations = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabelAnnotations()
    {
        return $this->label_annotations;
    }

    /**
     * If present, label detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation label_annotations = 4;</code>
     * @param \Google\Cloud\Vision\V1\EntityAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabelAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\EntityAnnotation::class);
        $this->label_annotations = $arr;

        return $this;
    }

    /**
     * If present, localized object detection has completed successfully.
     * This will be sorted descending by confidence score.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.LocalizedObjectAnnotation localized_object_annotations = 22;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocalizedObjectAnnotations()
    {
        return $this->localized_object_annotations;
    }

    /**
     * If present, localized object detection has completed successfully.
     * This will be sorted descending by confidence score.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.LocalizedObjectAnnotation localized_object_annotations = 22;</code>
     * @param \Google\Cloud\Vision\V1\LocalizedObjectAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocalizedObjectAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\LocalizedObjectAnnotation::class);
        $this->localized_object_annotations = $arr;

        return $this;
    }

    /**
     * If present, text (OCR) detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation text_annotations = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTextAnnotations()
    {
        return $this->text_annotations;
    }

    /**
     * If present, text (OCR) detection has completed successfully.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.EntityAnnotation text_annotations = 5;</code>
     * @param \Google\Cloud\Vision\V1\EntityAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTextAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\EntityAnnotation::class);
        $this->text_annotations = $arr;

        return $this;
    }

    /**
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     * This annotation provides the structural hierarchy for the OCR detected
     * text.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation full_text_annotation = 12;</code>
     * @return \Google\Cloud\Vision\V1\TextAnnotation
     */
    public function getFullTextAnnotation()
    {
        return $this->full_text_annotation;
    }

    /**
     * If present, text (OCR) detection or document (OCR) text detection has
     * completed successfully.
     * This annotation provides the structural hierarchy for the OCR detected
     * text.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation full_text_annotation = 12;</code>
     * @param \Google\Cloud\Vision\V1\TextAnnotation $var
     * @return $this
     */
    public function setFullTextAnnotation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\TextAnnotation::class);
        $this->full_text_annotation = $var;

        return $this;
    }

    /**
     * If present, safe-search annotation has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.SafeSearchAnnotation safe_search_annotation = 6;</code>
     * @return \Google\Cloud\Vision\V1\SafeSearchAnnotation
     */
    public function getSafeSearchAnnotation()
    {
        return $this->safe_search_annotation;
    }

    /**
     * If present, safe-search annotation has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.SafeSearchAnnotation safe_search_annotation = 6;</code>
     * @param \Google\Cloud\Vision\V1\SafeSearchAnnotation $var
     * @return $this
     */
    public function setSafeSearchAnnotation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\SafeSearchAnnotation::class);
        $this->safe_search_annotation = $var;

        return $this;
    }

    /**
     * If present, image properties were extracted successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageProperties image_properties_annotation = 8;</code>
     * @return \Google\Cloud\Vision\V1\ImageProperties
     */
    public function getImagePropertiesAnnotation()
    {
        return $this->image_properties_annotation;
    }

    /**
     * If present, image properties were extracted successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageProperties image_properties_annotation = 8;</code>
     * @param \Google\Cloud\Vision\V1\ImageProperties $var
     * @return $this
     */
    public function setImagePropertiesAnnotation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\ImageProperties::class);
        $this->image_properties_annotation = $var;

        return $this;
    }

    /**
     * If present, crop hints have completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.CropHintsAnnotation crop_hints_annotation = 11;</code>
     * @return \Google\Cloud\Vision\V1\CropHintsAnnotation
     */
    public function getCropHintsAnnotation()
    {
        return $this->crop_hints_annotation;
    }

    /**
     * If present, crop hints have completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.CropHintsAnnotation crop_hints_annotation = 11;</code>
     * @param \Google\Cloud\Vision\V1\CropHintsAnnotation $var
     * @return $this
     */
    public function setCropHintsAnnotation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\CropHintsAnnotation::class);
        $this->crop_hints_annotation = $var;

        return $this;
    }

    /**
     * If present, web detection has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.WebDetection web_detection = 13;</code>
     * @return \Google\Cloud\Vision\V1\WebDetection
     */
    public function getWebDetection()
    {
        return $this->web_detection;
    }

    /**
     * If present, web detection has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.WebDetection web_detection = 13;</code>
     * @param \Google\Cloud\Vision\V1\WebDetection $var
     * @return $this
     */
    public function setWebDetection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\WebDetection::class);
        $this->web_detection = $var;

        return $this;
    }

    /**
     * If present, product search has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ProductSearchResults product_search_results = 14;</code>
     * @return \Google\Cloud\Vision\V1\ProductSearchResults
     */
    public function getProductSearchResults()
    {
        return $this->product_search_results;
    }

    /**
     * If present, product search has completed successfully.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ProductSearchResults product_search_results = 14;</code>
     * @param \Google\Cloud\Vision\V1\ProductSearchResults $var
     * @return $this
     */
    public function setProductSearchResults($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\ProductSearchResults::class);
        $this->product_search_results = $var;

        return $this;
    }

    /**
     * If set, represents the error message for the operation.
     * Note that filled-in image annotations are guaranteed to be
     * correct, even when `error` is set.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 9;</code>
     * @return \Google\Rpc\Status
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * If set, represents the error message for the operation.
     * Note that filled-in image annotations are guaranteed to be
     * correct, even when `error` is set.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 9;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * If present, contextual information is needed to understand where this image
     * comes from.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageAnnotationContext context = 21;</code>
     * @return \Google\Cloud\Vision\V1\ImageAnnotationContext
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * If present, contextual information is needed to understand where this image
     * comes from.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageAnnotationContext context = 21;</code>
     * @param \Google\Cloud\Vision\V1\ImageAnnotationContext $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\ImageAnnotationContext::class);
        $this->context = $var;

        return $this;
    }

}

