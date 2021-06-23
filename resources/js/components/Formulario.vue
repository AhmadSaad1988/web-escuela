<template>
    <div class="col-10">
        <form v-on:submit.prevent="submitForm">
            <div class="card mb-8">
                <div class="card-header">
                    {{ "Datos del padre" }}
                </div>

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label
                                for="name"
                                class="col-form-label text-md-left"
                                >{{ "Nombre" }}</label
                            >
                            <input
                                id="name"
                                type="text"
                                class="form-control"
                                name="name"
                                required
                                autocomplete="name"
                                autofocus
                                placeholder="Nombre del padre/madre"
                                v-model="padre.name"
                            />
                        </div>

                        <div class="form-group col-md-6">
                            <label
                                for="apellido"
                                class="col-form-label text-md-right"
                                >{{ "Apellido" }}</label
                            >
                            <input
                                id="apellido"
                                type="text"
                                class="form-control"
                                name="apellido"
                                required
                                autocomplete="apellido"
                                autofocus
                                placeholder="Apellido del padre madre"
                                v-model="padre.surname"
                            />
                        </div>
                    </div>

                    <div class="form-row arabic-text">
                        <div class="form-group col-md-6">
                            <label
                                for="name"
                                class="col-form-label text-md-right arabic-text"
                                >{{ "الإسم" }}</label
                            >
                            <input
                                id="name"
                                type="text"
                                class="form-control"
                                name="name_ar"
                                required
                                autocomplete="name"
                                autofocus
                                placeholder="اسم الأب"
                                v-model="padre.name_ar"
                            />
                        </div>

                        <div class="form-group col-md-6 arabic-text">
                            <label
                                for="apellido"
                                class="col-form-label text-md-right arabic-text"
                                >{{ "اللقب" }}</label
                            >
                            <input
                                id="apellido"
                                type="text"
                                class="form-control "
                                name="apellido_ar"
                                required
                                autocomplete="apellido"
                                autofocus
                                placeholder="لقب الأب"
                                v-model="padre.surname_ar"
                            />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label
                                for="email"
                                class="col-form-label text-md-right"
                                >{{ "E-Mail" }}</label
                            >
                            <input
                                id="email"
                                type="email"
                                class="form-control"
                                name="email"
                                required
                                autocomplete="email"
                                placeholder="Correo"
                                v-model="padre.email"
                            />
                        </div>

                        <div class="form-group col-md-4">
                            <label
                                for="DNI"
                                class="col-form-label text-md-right"
                                >{{ "DNI" }}</label
                            >
                            <input
                                id="DNI"
                                type="text"
                                class="form-control"
                                name="dni"
                                required
                                autocomplete="DNI"
                                autofocus
                                placeholder="DNI"
                                v-model="padre.dni"
                            />
                        </div>

                        <div class="form-group col-md-4">
                            <label
                                for="telefono"
                                class="col-form-label text-md-right"
                                >{{ "Teléfono" }}</label
                            >
                            <input
                                id="DNI"
                                type="text"
                                class="form-control"
                                name="telefono"
                                required
                                autocomplete="telefono"
                                autofocus
                                placeholder="Teléfono"
                                v-model="padre.telefono"
                            />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label
                                for="direccion"
                                class="col-form-label text-md-right"
                                >{{ "Dirección" }}</label
                            >
                            <input
                                id="direccion"
                                type="text"
                                class="form-control"
                                name="direccion"
                                required
                                autocomplete="direccion"
                                autofocus
                                placeholder="Dirección"
                                v-model="padre.address"
                            />
                        </div>

                        <div class="form-group col-md-3">
                            <label
                                for="city"
                                class="col-form-label text-md-right"
                                >{{ "Ciudad" }}</label
                            >
                            <input
                                id="city"
                                type="text"
                                class="form-control"
                                name="city"
                                required
                                autocomplete="city"
                                autofocus
                                placeholder="Ciudad"
                                v-model="padre.city"
                            />
                        </div>

                        <div class="form-group col-md-3">
                            <label
                                for="postalcode"
                                class="col-form-label text-md-right"
                                >{{ "CP" }}</label
                            >
                            <input
                                id="postalcode"
                                type="text"
                                class="form-control"
                                name="postalcode"
                                required
                                autocomplete="postalcode"
                                autofocus
                                placeholder="Código postal"
                                v-model="padre.postalcode"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4 mb-4">
                <div class="card-header">
                    {{ "Datos del hijo/a" }}
                </div>

                <div class="card-body">
                    <table class="form-group" id="dynamic_field">
                        <div class="row">
                            <div class="col-2">Nombre</div>
                            <div class="col-2">Apellido</div>
                            <div class="col-2 arabic-text">الإسم</div>
                            <div class="col-2 arabic-text">اللقب</div>
                            <div class="col-3">Fecha Nacimiento</div>
                            <div class="col-1">
                                <a
                                    type="button"
                                    name="add"
                                    id="add"
                                    class="btn btn-info float-right"
                                    @click="addRow()"
                                    >+</a
                                >
                            </div>
                        </div>
                        <tbody id="dinamic-form">
                            <tr
                                class="row"
                                id="dinamic-row"
                                v-for="(hijo, index) in alumnos"
                                :key="index"
                            >
                                <td class="col-2">
                                    <input
                                        class="form-control"
                                        type="text"
                                        v-model="alumnos[index].name"
                                    />
                                </td>
                                <td class="col-2">
                                    <input
                                        class="form-control"
                                        type="text"
                                        v-model="alumnos[index].surname"
                                    />
                                </td>
                                <td class="col-2">
                                    <input
                                        class="form-control arabic-text"
                                        type="text"
                                        v-model="alumnos[index].name_ar"
                                    />
                                </td>
                                <td class="col-2">
                                    <input
                                        class="form-control arabic-text"
                                        type="text"
                                        v-model="alumnos[index].surname_ar"
                                    />
                                </td>
                                <td class="col-3">
                                    <input
                                        class="form-control"
                                        type="date"
                                        v-model="alumnos[index].birthday"
                                    />
                                </td>
                                <td class="col-1">
                                    <a
                                        href="#"
                                        class="btn btn-danger remove float-right"
                                        @click="deleteRow(index)"
                                        v-if="index != 0"
                                        >-</a
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <button class="btn  btn-primary col-3 center mb-4">
                {{ "Guardar" }}
            </button>
        </form>
    </div>
</template>
<script>
export default {
    name: "form",
    data() {
        return {
            padre: {
                id: "",
                name: "",
                surname: "",
                name_ar: "",
                surname_ar: "",
                email: "",
                dni: "",
                telefono: "",
                address: "",
                city: "",
                postalcode: ""
            },
            alumnos: [
                {
                    name: "",
                    surname: "",
                    name_ar: "",
                    surname_ar: "",
                    birthday: ""
                }
            ]
        };
    },
    methods: {
        addRow() {
            this.alumnos.push({
                name: "",
                surname: "",
                name_ar: "",
                surname_ar: "",
                birthday: ""
            });
        },
        deleteRow(index) {
            this.alumnos.splice(index, 1);
            console.log("HOLA");
        },
        submitForm() {
            axios
                .post("api/matricula", this.$data)
                .then(response => {
                    if (response.status === 200) {
                        this.$router.push({ path: "/" });
                    }
                })
                .catch(error => {
                    console.log(this.$data);
                })
                .finally(() => {
                    //Perform action in always
                });
        }
    }
};
</script>
<style lang=""></style>
