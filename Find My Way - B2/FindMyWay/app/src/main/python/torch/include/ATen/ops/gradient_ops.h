#pragma once

// @generated by tools/codegen/gen.py from Operator.h

#include <c10/core/QScheme.h>
#include <tuple>
#include <vector>


// Forward declarations of any types needed in the operator signatures.
// We can't directly include these classes because it will cause circular include dependencies.
// This file is included by TensorBody.h, which defines the Tensor class.
namespace c10 {

template<typename T>
class optional;
template<typename T>
class List;
class Stream;
class Scalar;
struct Storage;
struct TensorOptions;

}

namespace at {

class Tensor;
struct Dimname;
struct Generator;
using TensorList = c10::ArrayRef<Tensor>;
using DimnameList = c10::ArrayRef<Dimname>;
using c10::Stream;
using c10::Storage;
using c10::QScheme;
using c10::Scalar;
using c10::TensorOptions;

namespace _ops {


struct TORCH_API gradient_scalarint {
  using schema = ::std::vector<at::Tensor> (const at::Tensor &, const c10::optional<at::Scalar> &, c10::optional<int64_t>, int64_t);
  using ptr_schema = schema*;
  // See Note [static constexpr char* members for windows NVCC]
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(name, "aten::gradient")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(overload_name, "scalarint")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(schema_str, "gradient.scalarint(Tensor self, *, Scalar? spacing=None, int? dim=None, int edge_order=1) -> Tensor[]")
  static ::std::vector<at::Tensor> call(const at::Tensor & self, const c10::optional<at::Scalar> & spacing, c10::optional<int64_t> dim, int64_t edge_order);
  static ::std::vector<at::Tensor> redispatch(c10::DispatchKeySet dispatchKeySet, const at::Tensor & self, const c10::optional<at::Scalar> & spacing, c10::optional<int64_t> dim, int64_t edge_order);
};

struct TORCH_API gradient_scalararray {
  using schema = ::std::vector<at::Tensor> (const at::Tensor &, const at::Scalar &, at::IntArrayRef, int64_t);
  using ptr_schema = schema*;
  // See Note [static constexpr char* members for windows NVCC]
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(name, "aten::gradient")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(overload_name, "scalararray")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(schema_str, "gradient.scalararray(Tensor self, *, Scalar spacing, int[] dim, int edge_order=1) -> Tensor[]")
  static ::std::vector<at::Tensor> call(const at::Tensor & self, const at::Scalar & spacing, at::IntArrayRef dim, int64_t edge_order);
  static ::std::vector<at::Tensor> redispatch(c10::DispatchKeySet dispatchKeySet, const at::Tensor & self, const at::Scalar & spacing, at::IntArrayRef dim, int64_t edge_order);
};

struct TORCH_API gradient_array {
  using schema = ::std::vector<at::Tensor> (const at::Tensor &, at::IntArrayRef, int64_t);
  using ptr_schema = schema*;
  // See Note [static constexpr char* members for windows NVCC]
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(name, "aten::gradient")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(overload_name, "array")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(schema_str, "gradient.array(Tensor self, *, int[] dim, int edge_order=1) -> Tensor[]")
  static ::std::vector<at::Tensor> call(const at::Tensor & self, at::IntArrayRef dim, int64_t edge_order);
  static ::std::vector<at::Tensor> redispatch(c10::DispatchKeySet dispatchKeySet, const at::Tensor & self, at::IntArrayRef dim, int64_t edge_order);
};

struct TORCH_API gradient_scalarrayint {
  using schema = ::std::vector<at::Tensor> (const at::Tensor &, at::ArrayRef<at::Scalar>, c10::optional<int64_t>, int64_t);
  using ptr_schema = schema*;
  // See Note [static constexpr char* members for windows NVCC]
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(name, "aten::gradient")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(overload_name, "scalarrayint")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(schema_str, "gradient.scalarrayint(Tensor self, *, Scalar[] spacing, int? dim=None, int edge_order=1) -> Tensor[]")
  static ::std::vector<at::Tensor> call(const at::Tensor & self, at::ArrayRef<at::Scalar> spacing, c10::optional<int64_t> dim, int64_t edge_order);
  static ::std::vector<at::Tensor> redispatch(c10::DispatchKeySet dispatchKeySet, const at::Tensor & self, at::ArrayRef<at::Scalar> spacing, c10::optional<int64_t> dim, int64_t edge_order);
};

struct TORCH_API gradient_scalarrayarray {
  using schema = ::std::vector<at::Tensor> (const at::Tensor &, at::ArrayRef<at::Scalar>, at::IntArrayRef, int64_t);
  using ptr_schema = schema*;
  // See Note [static constexpr char* members for windows NVCC]
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(name, "aten::gradient")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(overload_name, "scalarrayarray")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(schema_str, "gradient.scalarrayarray(Tensor self, *, Scalar[] spacing, int[] dim, int edge_order=1) -> Tensor[]")
  static ::std::vector<at::Tensor> call(const at::Tensor & self, at::ArrayRef<at::Scalar> spacing, at::IntArrayRef dim, int64_t edge_order);
  static ::std::vector<at::Tensor> redispatch(c10::DispatchKeySet dispatchKeySet, const at::Tensor & self, at::ArrayRef<at::Scalar> spacing, at::IntArrayRef dim, int64_t edge_order);
};

struct TORCH_API gradient_tensorarrayint {
  using schema = ::std::vector<at::Tensor> (const at::Tensor &, at::TensorList, c10::optional<int64_t>, int64_t);
  using ptr_schema = schema*;
  // See Note [static constexpr char* members for windows NVCC]
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(name, "aten::gradient")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(overload_name, "tensorarrayint")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(schema_str, "gradient.tensorarrayint(Tensor self, *, Tensor[] spacing, int? dim=None, int edge_order=1) -> Tensor[]")
  static ::std::vector<at::Tensor> call(const at::Tensor & self, at::TensorList spacing, c10::optional<int64_t> dim, int64_t edge_order);
  static ::std::vector<at::Tensor> redispatch(c10::DispatchKeySet dispatchKeySet, const at::Tensor & self, at::TensorList spacing, c10::optional<int64_t> dim, int64_t edge_order);
};

struct TORCH_API gradient_tensorarray {
  using schema = ::std::vector<at::Tensor> (const at::Tensor &, at::TensorList, at::IntArrayRef, int64_t);
  using ptr_schema = schema*;
  // See Note [static constexpr char* members for windows NVCC]
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(name, "aten::gradient")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(overload_name, "tensorarray")
  STATIC_CONSTEXPR_STR_INL_EXCEPT_WIN_CUDA(schema_str, "gradient.tensorarray(Tensor self, *, Tensor[] spacing, int[] dim, int edge_order=1) -> Tensor[]")
  static ::std::vector<at::Tensor> call(const at::Tensor & self, at::TensorList spacing, at::IntArrayRef dim, int64_t edge_order);
  static ::std::vector<at::Tensor> redispatch(c10::DispatchKeySet dispatchKeySet, const at::Tensor & self, at::TensorList spacing, at::IntArrayRef dim, int64_t edge_order);
};

}} // namespace at::_ops