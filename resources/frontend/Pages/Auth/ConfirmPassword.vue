<template layout="Default">
  <Head title="Confirm Password" />

  <div class="tw-mb-4 tw-text-sm tw-text-gray-600">
    Esta é uma área segura do aplicativo. Por favor, confirme sua senha antes de
    continuar.
  </div>

  <form @submit.prevent="form.post(route('password.confirm'))">
    <q-input
      id="password"
      v-model="form.password"
      :error-message="errors.password"
      :error="!!errors.password"
      label="Senha"
      type="password"
      required
      autocomplete="current-password"
      autofocus
      outlined
    />

    <div class="tw-flex tw-justify-end tw-mt-4">
      <q-btn :disabled="form.processing" type="submit" color="primary">
        Confirmar
      </q-btn>
    </div>
  </form>
</template>

<script setup>
const props = defineProps({
  form: Object,
  errors: Object,
});

const form = useForm(props.form);
</script>
