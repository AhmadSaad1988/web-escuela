<template>
    <div class="col-10">
        <form name="add_name" id="add_name">
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
                                value=""
                                required
                                autocomplete="name"
                                autofocus
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
                                value=""
                                required
                                autocomplete="apellido"
                                autofocus
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
                                value=""
                                required
                                autocomplete="name"
                                autofocus
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
                                value=""
                                required
                                autocomplete="apellido"
                                autofocus
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
                                value=""
                                required
                                autocomplete="email"
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
                                value=""
                                required
                                autocomplete="DNI"
                                autofocus
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
                                value=""
                                required
                                autocomplete="telefono"
                                autofocus
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
                                value=""
                                required
                                autocomplete="direccion"
                                autofocus
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
                                value=""
                                required
                                autocomplete="city"
                                autofocus
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
                                value=""
                                required
                                autocomplete="postalcode"
                                autofocus
                                v-model="inscription.padre.postalcode"
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
                                v-for="(hijo, index) in inscription.alumnos"
                                :key="index"
                            >
                                <td class="col-2">
                                    <input class="form-control" type="text"/>
                                </td>
                                <td class="col-2">
                                    <input class="form-control" type="text" />
                                </td>
                                <td class="col-2">
                                    <input
                                        class="form-control arabic-text"
                                        type="text"
                                    />
                                </td>
                                <td class="col-2">
                                    <input
                                        class="form-control arabic-text"
                                        type="text"
                                    />
                                </td>
                                <td class="col-3">
                                    <input class="form-control" type="date" />
                                </td>
                                <td class="col-1">
                                    <a href="#" class="btn btn-danger remove float-right" @click="deleteRow(index)" v-if="index != 0">-</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <button
                id="submit"
                type="submit"
                class="btn  btn-primary col-3 center mb-4"
                @click="submit()"
            >
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
            inscription: {
                padre: [
                    {
                        id: "",
                        name: "",
                        surname: "",
                        nameAr: "",
                        surnameAr: "",
                        email: "", 
                        dni: "",
                        phone: "",
                        address: "",
                        city: "",
                        postalcode: ""
                    }
                ],
                alumnos: [
                    {
                        name: "",
                        surname: "",
                        nameAr: "",
                        surnameAr: "",
                        birthday: ""
                    }
                ]
            }
        };
    },
    methods: {
        addRow() {
            this.inscription.alumnos.push({
                name: "",
                surname: "",
                nameAr: "",
                surnameAr: "",
                birthday: ""
            });
        },
        deleteRow(index) {
            this.inscription.alumnos.splice(index, 1);
            console.log("HOLA");
        }, 
        submit() {
            console.log(this.inscription);
        }
    }
};
</script>
<style lang=""></style>
