#pragma once

// @generated by tools/codegen/gen.py from Function.h

#include <ATen/Context.h>
#include <ATen/DeviceGuard.h>
#include <ATen/TensorUtils.h>
#include <ATen/TracerMode.h>
#include <ATen/core/Generator.h>
#include <ATen/core/Reduction.h>
#include <ATen/core/Tensor.h>
#include <c10/core/Scalar.h>
#include <c10/core/Storage.h>
#include <c10/core/TensorOptions.h>
#include <c10/util/Deprecated.h>
#include <c10/util/Optional.h>



#include <ATen/ops/hardshrink_backward_ops.h>

namespace at {


// aten::hardshrink_backward.grad_input(Tensor grad_out, Tensor self, Scalar lambd, *, Tensor(a!) grad_input) -> Tensor(a!)
TORCH_API inline at::Tensor & hardshrink_backward_out(at::Tensor & grad_input, const at::Tensor & grad_out, const at::Tensor & self, const at::Scalar & lambd) {
    return at::_ops::hardshrink_backward_grad_input::call(grad_out, self, lambd, grad_input);
}

// aten::hardshrink_backward.grad_input(Tensor grad_out, Tensor self, Scalar lambd, *, Tensor(a!) grad_input) -> Tensor(a!)
TORCH_API inline at::Tensor & hardshrink_backward_outf(const at::Tensor & grad_out, const at::Tensor & self, const at::Scalar & lambd, at::Tensor & grad_input) {
    return at::_ops::hardshrink_backward_grad_input::call(grad_out, self, lambd, grad_input);
}

// aten::hardshrink_backward(Tensor grad_out, Tensor self, Scalar lambd) -> Tensor
TORCH_API inline at::Tensor hardshrink_backward(const at::Tensor & grad_out, const at::Tensor & self, const at::Scalar & lambd) {
    return at::_ops::hardshrink_backward::call(grad_out, self, lambd);
}

}