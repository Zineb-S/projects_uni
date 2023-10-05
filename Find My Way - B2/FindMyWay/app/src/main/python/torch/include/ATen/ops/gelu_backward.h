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



#include <ATen/ops/gelu_backward_ops.h>

namespace at {


// aten::gelu_backward.grad_input(Tensor grad, Tensor self, *, Tensor(a!) grad_input) -> Tensor(a!)
TORCH_API inline at::Tensor & gelu_backward_out(at::Tensor & grad_input, const at::Tensor & grad, const at::Tensor & self) {
    return at::_ops::gelu_backward_grad_input::call(grad, self, grad_input);
}

// aten::gelu_backward.grad_input(Tensor grad, Tensor self, *, Tensor(a!) grad_input) -> Tensor(a!)
TORCH_API inline at::Tensor & gelu_backward_outf(const at::Tensor & grad, const at::Tensor & self, at::Tensor & grad_input) {
    return at::_ops::gelu_backward_grad_input::call(grad, self, grad_input);
}

// aten::gelu_backward(Tensor grad, Tensor self) -> Tensor
TORCH_API inline at::Tensor gelu_backward(const at::Tensor & grad, const at::Tensor & self) {
    return at::_ops::gelu_backward::call(grad, self);
}

}