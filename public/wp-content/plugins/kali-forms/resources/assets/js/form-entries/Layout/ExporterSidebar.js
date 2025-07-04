import React, { useContext, useState, useEffect } from 'react'
import { Layout as AntdLayout, Card, Typography, List } from 'antd';
import { ExportContext } from './../Context/ExportContext';
import { AppPropsContext } from './../Context/AppPropsContext';
import CheckCircleTwoTone from '@ant-design/icons/CheckCircleTwoTone';
const { Sider } = AntdLayout;
import { __ } from '@wordpress/i18n';

const initialConfig = [
	{
		label: __('Form selection', 'kaliforms'),
		complete: false,
		args: '',
		id: 'formSelection',
	},
	{
		label: __('Field selection', 'kaliforms'),
		complete: false,
		args: '',
		id: 'fieldSelection',
	},
	{
		label: __('Reorder & Formatting', 'kaliforms'),
		complete: false,
		args: '',
		id: 'reorderFormatting',
	},
]

export default function ExporterSidebar() {
	const [exportOptions] = useContext(ExportContext);
	const AppProps = useContext(AppPropsContext);
	const [configTranslation, setConfigTranslation] = useState(initialConfig);

	useEffect(() => {
		if (exportOptions.currentStep === 0) {
			return;
		}

		setConfigTranslation(prevState => {
			let newState = prevState;
			newState[exportOptions.currentStep - 1].complete = true;

			switch (exportOptions.currentStep) {
				case 1:
					if (exportOptions.multiple) {
						if (!exportOptions.forms || !exportOptions.forms.length) {
							newState[0].args = __('No forms selected', 'kaliforms');
						} else {
							const selectedForms = AppProps.allForms
								.filter(form => exportOptions.forms.includes(form.id))
								.map(form => `${form.name} (#${form.id})`);
							newState[0].args = selectedForms.join(', ');
						}
					} else {
						const currentForm = AppProps.allForms.find(el => el.id === exportOptions.form);
						if (currentForm) {
							newState[0].args = `${currentForm.name} (#${currentForm.id})`;
						} else {
							newState[0].args = __('No form selected', 'kaliforms');
						}
					}
					break;
				case 2:
					let translated = {
						csv: __('CSV', 'kaliforms'),
						xls: __('Microsoft Excel™', 'kaliforms'),
						xlsx: __('Microsoft Excel™ 2007', 'kaliforms'),
						gsheet: __('Google sheet', 'kaliforms'),
					}
					newState[1].args = <React.Fragment>
						{__('Fields: ', 'kaliforms')} {exportOptions.fields.length} <br />
						{__('Format: ', 'kaliforms')} {translated[exportOptions.fileFormat]}
					</React.Fragment>;
					break;
			}

			return [...newState];
		})

		return () => {
			setConfigTranslation(initialConfig)
		}
	}, [exportOptions])

	return (
		<Sider className="site-layout-background" width={240}>
			<Card>
				<List>
					{configTranslation.map(el =>
						<List.Item key={el.id} extra={<CheckCircleTwoTone style={{ fontSize: 18 }} twoToneColor={el.complete ? "#52c41a" : false} />}>
							<List.Item.Meta
								title={el.label}
								description={el.complete ? el.args : false}
							/>
						</List.Item>
					)}
				</List>
			</Card>
		</Sider>
	)
}
