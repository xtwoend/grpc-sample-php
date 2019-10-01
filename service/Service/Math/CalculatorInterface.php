<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/math.proto

namespace Service\Math;

/**
 * Protobuf type <code>service.math.Calculator</code>
 */
interface CalculatorInterface
{
    /**
     * Method <code>add</code>
     *
     * @param \Service\Math\AddRequest $request
     * @return \Service\Math\AddReply
     */
    public function add(\Service\Math\AddRequest $request);

    /**
     * Method <code>subtract</code>
     *
     * @param \Service\Math\SubtractRequest $request
     * @return \Service\Math\SubtractReply
     */
    public function subtract(\Service\Math\SubtractRequest $request);

}
